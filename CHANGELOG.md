# Changelog
All notable changes to this project will be documented in this file.

## Version: 0.0.3
- ADDED: Working the Base64 encoding & decoding out. The reason for Base64 is because of HTML elements are not always well inserted into the MySQL database.
- ADDED: Sass style files for easier making changes
- ADDED: .GitIgnore, because of I needed a settings.json for VScode and SASS. And MacOS is making system files (DS_STORE) files in some directories.
- UPDATED: Different GUI. Custom bootstrap navbar

## Version: 0.0.2
- ADDED: Logger function that registers fault logins in the class "User"
- ADDED: Label right-top with the name of the current user
- ADDED: code is prepared for building a admin-console around it
- ADDED: Password change
- FIX: Rewrited the code with function name "addJS" & "addCSS", now a boolean is required to let the script know if its a local file or a file hosted on a CDN
- FIX: Login verify issues. Added two new pages "sign-in.php" and "sign-out.php"

## Version: 0.0.1
- Init