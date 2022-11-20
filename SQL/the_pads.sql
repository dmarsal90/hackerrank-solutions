select concat(name, '(', left(occupation, 1), ')')
  from occupations
 order by name;
 
select concat(
            "There are a total of ", count(1), " ", 
            lower(occupation), if(count(1) > 1, "s.", ".")
       )
  from occupations
 group by occupation
 order by count(occupation), occupation;