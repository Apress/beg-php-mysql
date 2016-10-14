CREATE PROCEDURE get_employees()
   SELECT employee_id, name, position FROM employees ORDER by name;
