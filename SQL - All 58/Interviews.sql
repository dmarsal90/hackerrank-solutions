SELECT ct.contest_id, ct.hacker_id, ct.name,
       SUM(a.tot_sub), SUM(a.tot_acc_sub), SUM(b.tot_views), SUM(b.tot_uni_views)
FROM contests ct
JOIN colleges co ON co.contest_id = ct.contest_id
JOIN challenges ch ON ch.college_id = co.college_id
LEFT JOIN
    (SELECT ss.challenge_id challenge_id, 
     SUM(ss.total_submissions) tot_sub, SUM(ss.total_accepted_submissions) tot_acc_sub
    FROM submission_stats ss
    GROUP BY ss.challenge_id) a ON a.challenge_id = ch.challenge_id
LEFT JOIN 
    (SELECT vs.challenge_id challenge_id, 
     SUM(vs.total_views) tot_views, SUM(vs.total_unique_views) tot_uni_views
    FROM view_stats vs
    GROUP BY vs.challenge_id) b ON b.challenge_id = ch.challenge_id
GROUP BY ct.contest_id, ct.Hacker_id, ct.name
HAVING (SUM(a.tot_sub) + SUM(a.tot_acc_sub) + SUM(b.tot_views) + SUM(b.tot_uni_views) ) != 0
ORDER BY ct.contest_id;
