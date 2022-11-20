WITH
    hacker_rank AS (
        SELECT
            c.hacker_id
          , MAX(h.name) AS name
          , COUNT(*) AS challenges_created
          , MAX(count(c.hacker_id)) over () AS max_challenges
          , ROW_NUMBER() OVER (
                PARTITION BY
                    COUNT(c.hacker_id)
                ORDER BY
                    c.hacker_id
            ) AS rn
        FROM
            challenges c
            INNER JOIN hackers h ON c.hacker_id = h.hacker_id
        GROUP BY
            c.hacker_id
    )
  , filt AS (
        SELECT
            challenges_created
        FROM
            hacker_rank
        WHERE
            challenges_created != max_challenges
            AND rn > 1
    )
SELECT
    hacker_id
  , name
  , challenges_created
FROM
    hacker_rank
WHERE
    challenges_created NOT IN (
        SELECT
            challenges_created
        FROM
            filt
    )
ORDER BY
    challenges_created desc
  , hacker_id
;