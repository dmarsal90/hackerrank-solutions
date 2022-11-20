SELECT Ref_Table.Name 
FROM(SELECT S.Name, S.ID, F.Friend_ID, P1.Salary AS SOfBF, P2.Salary AS SOfName
    FROM Students as S
    INNER JOIN FRIENDS AS F ON S.ID = F.ID
    INNER JOIN PACKAGES AS P1 ON F.Friend_ID = P1.ID
    INNER JOIN PACKAGES AS P2 ON S.ID = P2.ID) 
    AS Ref_Table
WHERE Ref_Table.SOfBF > Ref_Table.SOfName
ORDER BY Ref_Table.SOfBF;