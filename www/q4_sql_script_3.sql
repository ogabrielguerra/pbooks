-- COUNT APPLICATIONS BY USER
SELECT ca.id_user, u.name, COUNT(ca.id_user) as num_applications
FROM course_application ca, user u
WHERE ca.id_user = u.id
GROUP BY ca.id_user, u.name;