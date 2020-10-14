<?php
    class CourseCategory {
        function __construct($mysqli) {
            $this->mysqli = $mysqli;
        }

        function getAllCategory($json = 0) {
            $sql_query = "SELECT `category_id`, `category_name` FROM `course_category`";
            $result = $this->mysqli->query($sql_query);
            $result_arr = $result->fetch_all(1);
            if ($json == 1) {
                $result_arr = json_encode($result_arr);
            }
            return $result_arr;
        }

        function addCategory($category_name) {
            // $sql_query = 'INSERT INTO course_category VALUES (NULL, "'.$category_name.'", '.TIME_STAMP.', '.TIME_STAMP.')';
            $sql_query = "INSERT INTO course_category VALUES (NULL, '".$category_name."', '". TIME_STAMP ."', '".TIME_STAMP."')";
            $result = $this->mysqli->query($sql_query);
            return $result;
        }

        function deleteCategory($category_name) {

        }

        function editCategory($old_category_name, $new_category_name) {

        }

    }
?>