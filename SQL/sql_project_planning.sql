with s as
(
    select Start_Date, row_number() over() as id
    from Projects
    where Start_Date not in (select End_Date from Projects)
),
e as
(
    select End_date, row_number() over() as id
    from Projects 
    where End_date not in (select Start_Date from Projects)
)
select s.Start_Date, e.End_Date 
from e join s on e.id=s.id
order by datediff(s.Start_Date, e.End_Date) DESC, s.Start_Date ASC
;