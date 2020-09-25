SELECT *
FROM user;

SELECT *
FROM course;

SELECT ca.id, ca.id_user, ca.id_course, c.title, u.name, u.email, ca.application_date
FROM course_application ca , course c, user u
WHERE ca.id_user = u.id
AND ca.id_course = c.id;

SELECT ca.id, ca.id_user, ca.id_course, c.title, u.name, u.email, ca.application_date
FROM course_application ca , course c, user u
WHERE ca.id_user = u.id
AND ca.id_course = c.id;

SELECT ca.id_user, u.name, COUNT(ca.id_user) as num_applications
FROM course_application ca, user u
WHERE ca.id_user = u.id
GROUP BY ca.id_user, u.name;

ALTER TABLE course_application ADD UNIQUE INDEX( `id_course`, `id_user`);