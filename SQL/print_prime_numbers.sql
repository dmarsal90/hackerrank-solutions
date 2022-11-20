WITH RECURSIVE RE_CTE AS 
    (
     SELECT 1 num
     UNION ALL
     SELECT num + 1 FROM RE_CTE WHERE num < 1000
    )
    , MAIN_CTE AS
    (
    SELECT n1.num nums
    FROM RE_CTE n1, RE_CTE n2
    WHERE mod(n1.num,n2.num)=0
    GROUP BY n1.num
    HAVING count(n1.num)=2
    ORDER BY 1
    )

SELECT GROUP_CONCAT(nums SEPARATOR '&')
FROM MAIN_CTE;