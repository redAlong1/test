SELECT 
    d.id AS driver_id,
    d.name,
    COUNT(t.id) AS jumlah_trip
FROM 
    drivers d
JOIN 
    trips t ON d.id = t.driver_id
WHERE 
    t.trip_date >= DATE_SUB(CURDATE(), INTERVAL 1 MONTH)
GROUP BY 
    d.id, d.name
HAVING 
    COUNT(t.id) > 5;