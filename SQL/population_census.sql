SELECT SUM(CITY.Population) 
FROM COUNTRY, CITY 
WHERE 
    CITY.CountryCode = COUNTRY.Code AND
    COUNTRY.Continent = 'Asia';