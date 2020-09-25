SELECT ca.id, ca.id_user, ca.id_course, c.title, u.name, u.email, ca.application_date
FROM course_application ca , course c, user u
WHERE ca.id_user = u.id
AND ca.id_course = c.id
AND ca.id_user = 1;