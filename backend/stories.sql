CREATE TABLE IF NOT EXISTS stories (
  id INT AUTO_INCREMENT PRIMARY KEY,
  quote TEXT NOT NULL,
  name VARCHAR(100) NOT NULL,
  role VARCHAR(255) NOT NULL
);

INSERT INTO stories (quote, name, role) VALUES
('The Blind Classroom has transformed how I learn. I can finally access the same curriculum as my sighted classmates.', 'Sarah M.', 'Standard 6 Student, Chilanga School for the Blind'),
('This technology is revolutionary. We''re seeing unprecedented engagement from our visually impaired students.', 'James K.', 'Teacher, St. Joseph Resource Centre');
