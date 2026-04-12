-- SQL script to manage admin users
-- Run these commands in your database to set admin privileges

-- Make the first registered user an admin (useful for initial setup)
UPDATE accounts 
SET admin = TRUE 
WHERE id = 1;

-- OR manually set specific users as admin by username
-- UPDATE accounts 
-- SET admin = TRUE 
-- WHERE username = 'your_admin_username';

-- Check current admin users
-- SELECT username, admin, created_at FROM accounts WHERE admin = TRUE;

-- Remove admin privileges from a user
-- UPDATE accounts 
-- SET admin = FALSE 
-- WHERE username = 'username_to_remove_admin';