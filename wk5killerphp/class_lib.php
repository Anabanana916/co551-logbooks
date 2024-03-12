<?php
    class person {
        var $name;

            public $height;
            protected $social_insurance;
            private $pin_number;

            public function __construct($persons_name) {
                $this->name = $persons_name;
            }
            public function get_name() {
                return $this->name;
            }

            private function get_pin_number() {
                return $this->pin_number;
            }

            protected function set_name($new_name) {
                $this->name = $new_name;
                if ($new_name != "Jimmy Two Guns") {
                    $this->name .= strtoupper($new_name);
                }
                else if ($new_name == "Johnny Fingers") {
                    person::set_name($new_name);
                }
            }
    }
    class employee extends person {
        protected function set_name($new_name) {
            if ($new_name == "Stefan Sucks"){
                $this->name = $new_name;
            }
        }

        public function __construct($employee_name) {
            $this->set_name($employee_name);
        }
    }