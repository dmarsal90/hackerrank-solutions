SELECT 
e.company_code, 
c.founder, 
COUNT(DISTINCT lead_manager_code), 
COUNT(DISTINCT senior_manager_code),
COUNT(DISTINCT manager_code),
COUNT(DISTINCT employee_code)
FROM employee AS e
JOIN company as c
on e.company_code = c.company_code
GROUP BY e.company_code, c.founder
ORDER BY e.company_code ASC;