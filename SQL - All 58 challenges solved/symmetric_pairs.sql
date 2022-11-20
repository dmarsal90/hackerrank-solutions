select x,y
from
(
    select t1.x,t1.y
    from functions t1 inner join
    functions t2
    on t1.x = t2.y
    and t1.y = t2.x
    and t1.x< t1.y
    union
    select x,y
    from functions
    group by x,y
    having count(*)>1
)t1
order by x;