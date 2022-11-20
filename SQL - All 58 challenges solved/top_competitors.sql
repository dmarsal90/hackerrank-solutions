SELECT
    s.hacker_id,
    h.name
FROM
    Submissions s
    INNER JOIN Hackers h ON h.hacker_id = s.hacker_id
    INNER JOIN Challenges c ON c.challenge_id = s.challenge_id
    INNER JOIN Difficulty d ON d.difficulty_level = c.difficulty_level
    AND s.score = d.score
GROUP BY
    s.hacker_id,
    h.name
HAVING
    COUNT(DISTINCT s.challenge_id) > 1
ORDER BY
    COUNT(DISTINCT s.challenge_id) desc, s.hacker_id, h.name;