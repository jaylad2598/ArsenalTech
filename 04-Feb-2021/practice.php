Query 1 :- SELECT FIRST_NAME,LAST_NAME,SALARY FROM employees WHERE SALARY >(SELECT SALARY FROM employees WHERE LAST_NAME = 'Bull')

Query 2 :- select first_name,last_name from employees WHERE DEPARTMENT_ID IN(select DEPARTMENT_ID from departments WHERE department_name = 'IT' )

Query 3 :- SELECT first_name, last_name FROM employees 
WHERE manager_id in (select employee_id 
FROM employees WHERE department_id 
IN (SELECT department_id FROM departments WHERE location_id 
IN (select location_id from locations where country_id='US')));

Query 4 :- SELECT first_name, last_name FROM employees WHERE (employee_id IN (SELECT manager_id FROM employees))

Query 5 :- SELECT first_name, last_name, salary FROM employees WHERE salary > (SELECT AVG(salary) FROM employees)

Query 6 :- SELECT first_name,last_name,salary from employees where employees.salary In(select min_salary from jobs where jobs.JOB_ID = employees.JOB_ID)

Query 7 :- select first_name,last_name,salary from employees where department_id IN(select department_id from departments where department_name ='IT') AND salary >(select AVG(salary) from employees)

Query 8 :- SELECT first_name, last_name, salary FROM employees WHERE salary > (SELECT salary FROM employees WHERE last_name = 'Bell') ORDER BY first_name

Query 9 :- SELECT * FROM employees WHERE salary = (SELECT MIN(salary) FROM employees)