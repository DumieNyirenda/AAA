-- Table: partners
CREATE TABLE IF NOT EXISTS partners (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  type VARCHAR(100) NOT NULL, -- e.g. 'Implementation Partner', 'Support Partner', etc.
  description TEXT,
  programs TEXT, -- comma-separated or JSON
  impact TEXT, -- comma-separated or JSON
  icon VARCHAR(100), -- e.g. 'bi-bullseye', 'bi-handshake', etc.
  color VARCHAR(50), -- e.g. 'primary', 'secondary', etc.
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Example seed data
INSERT INTO partners (name, type, description, programs, impact, icon, color) VALUES
('Save the Children', 'Official Implementing Partner', 'Leading our implementation through their Digital Inclusion and Future-M programs, bringing decades of child-focused development experience.', 'Digital Inclusion,Future-M', 'Direct implementation support,Resource mobilization,Technical expertise,Network expansion', 'bi-bullseye', 'primary'),
('Muuni Fund', 'Support Partner', 'Providing strategic support and resources to accelerate our mission of inclusive education technology.', 'Innovation Support', 'Direct implementation support,Resource mobilization,Technical expertise,Network expansion', 'bi-handshake', 'primary'),
('NSCT', 'National Innovation Champion', 'National Commission for Science & Technology championing our innovation at the national level.', 'Research & Development', 'Direct implementation support,Resource mobilization,Technical expertise,Network expansion', 'bi-lightning', 'primary');
