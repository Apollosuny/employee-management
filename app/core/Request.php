<?php

class Request {

    private $__rules = [], $__messages;
    private $errors = [];

    public function getMethod() {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }

    public function isPost() {
        if ($this->getMethod() == 'post') return true;
        return false;
    }

    public function isGet() {
        if ($this->getMethod() == 'get') return true;
        return false;
    }

    public function getFields() {

        $dataFields = [];

        if ($this->isGet()) {
            if (!empty($_GET)) {
                foreach ($_GET as $key=>$value) {
                    if (is_array($value)) {
                        $dataFields[$key] = filter_input(INPUT_GET, $key, FILTER_SANITIZE_SPECIAL_CHARS, FILTER_REQUIRE_ARRAY);
                    } else {
                        $dataFields[$key] = filter_input(INPUT_GET, $key, FILTER_SANITIZE_SPECIAL_CHARS);
                    }
                    
                }
            }
        }

        if ($this->isPost()) {
            if (!empty($_POST)) {
                foreach ($_POST as $key=>$value) {
                    if (is_array($value)) {
                        $dataFields[$key] = filter_input(INPUT_POST, $key, FILTER_SANITIZE_SPECIAL_CHARS, FILTER_REQUIRE_ARRAY);
                    } else {
                        $dataFields[$key] = filter_input(INPUT_POST, $key, FILTER_SANITIZE_SPECIAL_CHARS);
                    }
                }
            }
        }

        return $dataFields;
    }

    public function rules($rules = []) {
        $this->__rules = $rules;
    }

    public function message($messages = []) {
        $this->__messages = $messages;
    }

    public function validate() {
        $this->__rules = array_filter($this->__rules);
        $checkValidate = true;
        if (!empty($this->__rules)) {

            $dataFields = $this->getFields();

            foreach ($this->__rules as $fieldName=>$ruleItem) {
                $ruleItemArr = explode('|', $ruleItem);

                foreach ($ruleItemArr as $rules) {
                    $ruleName = null;
                    $ruleValue = null;
                    $rulesArr = explode(':', $rules);

                    $ruleName = reset($rulesArr);
                    if (count($rulesArr) > 1) {
                        $ruleValue = end($rulesArr);
                    } 

                    if ($ruleName == 'required') {
                        if (empty(trim($dataFields[$fieldName]))) {
                            $this->setErrors($fieldName, $ruleName);
                            $checkValidate = false;
                        }
                    }

                    if ($ruleName == 'min') {
                        if (strlen(trim($dataFields[$fieldName])) < $ruleValue) {
                            $this->setErrors($fieldName, $ruleName);
                            $checkValidate = false;
                        }
                    }

                    if ($ruleName == 'max') {
                        if (strlen(trim($dataFields[$fieldName])) > $ruleValue) {
                            $this->setErrors($fieldName, $ruleName);
                            $checkValidate = false;
                        }
                    }

                    if ($ruleName == 'email') {
                        if (filter_var($dataFields[$fieldName], FILTER_VALIDATE_EMAIL)) {
                            $this->setErrors($fieldName, $ruleName);
                            $checkValidate = false;
                        }
                    }

                    if ($ruleName == 'match') {
                        if (trim($dataFields[$fieldName]) != trim($dataFields[$ruleValue])) {
                            $this->setErrors($fieldName, $ruleName);
                            $checkValidate = false;
                        }
                    }

                    if ($ruleName == 'unique') {
                        $tableName = null;
                        $fieldCheck = null;

                        if (!empty($rulesArr[1])) {
                            $tableName = $rulesArr[1];
                        }

                        if (!empty($rulesArr[2])) {
                            $fieldCheck = $rulesArr[2];
                        }

                        if (!empty($tableName) && !empty($fieldCheck)) {
                            
                        }

                    }
                }
            }
        }

        return $checkValidate;
    }

    public function errors($fieldName = '') {
        if (!empty($this->errors)) {
            if (empty($fieldName)) {
                $errorsArr = [];
                foreach ($this->errors as $key=>$error) {
                    $errorsArr[$key] = reset($error);
                }
                return $errorsArr;
            }
            return reset($this->errors[$fieldName]);
        } 
    }

    public function setErrors($fieldName, $ruleName) {
        $this->errors[$fieldName][$ruleName] = $this->__messages[$fieldName.'.'.$ruleName];
    }
}