<p align="center"><b>Software<br>Requirements<br>Specification<br>
(SRS)</b></p>
<p align="center">_______________________________________________________________________________________________</p>
<p align="center"><b>mNote</b><br>
<i>The Best Note Keeping Application</i></p>
<p align="center">_______________________________________________________________________________________________</p>
<p align="center"><b>Krasimir Kostov<br>Elena Avramova<br>Plamen Vladimirov<br>Nadezhda Metodieva<br>Georgi Angelov<br>Borislav Ivanchev<br>Andrei Kozarev<br>Ani Arsova</b></p><br>
 
 
## SRS Table of Contents

<details>
<summary>Click to expand</summary>
	
- [1. **Introduction**](#1-introduction)
    - [1.1. **Purpose**](#11-purpose)
	- [1.2. **Scope**](#12-scope)
- [2. **Overall description**](#2-overall-description)
	- [2.1 **Design**](#21-design)
		- [2.1.1. **Front end**](#211-front-end)
		- [2.1.2. **Back-end**](#212-back-end)
	- [2.2. **Operating Environment**](#22-operating-environment)
- [3. **User Interface Requirements**](#3-user-interface-requirements)
	- [3.1. **User Interface - Administration module**](#31-user-interface---administration-module)
		- [3.1.1. **Login Screen**](#311-login-screen)
		- [3.1.2. **Registration Screen**](#312-registration-screen)
		- [3.1.3. **Profile Screen**](#313-profile-screen)
    - [3.2. **User Interface - Functional module**](#32-user-interface---functional-module)
	    - [3.2.1. **Main Screen(From Left to Right and from Top to Down)**](#321-main-screen-from-left-to-right-and-from-top-to-down)
		- [3.2.2. **Note screen**](#322-note-screen)
- [4. **Functional Requirements (Use Cases)**](#4-functional-requirements-use-cases)
    - [4.1. **Administration module Use Cases**](#41-administration-module-use-cases)
		- [4.1.1. **Use Case FR4.1.1: User registration**](#411-use-case-fr411-user-registration)        
		- [4.1.2. **Use Case FR4.1.2: Logging in**](#412-use-case-fr412-logging-in)        
		- [4.1.3. **Use Case FR4.1.3: Forgotten password**](#413-use-case-fr413-forgotten-password)        
		- [4.1.4. **Use Case FR4.1.4: Editing a profile info**](#414-use-case-fr414-editing-a-profile-info)    
	- [4.2. **Functional module Use Cases**](#42-functional-module-use-cases)
		- [4.2.1. **Use Case FR4.2.1: Create a New Note**](#421-use-case-fr421-create-a-new-note)        
		- [4.2.2. **Use Case FR4.2.2: Edit a Note**](#422-use-case-fr422-edit-a-note)        
		- [4.2.3. **Use Case FR4.2.3: Delete**](#423-use-case-fr423-delete)        
		- [4.2.4. **Use Case FR4.2.4: Archive**](#424-use-case-fr424-archive)        
		- [4.2.5. **Use Case FR4.2.5: Sort notes by status Done/ Not done**](#425-use-case-fr425-sort-notes-by-status-done-not-done)        
		- [4.2.6. **Use Case FR4.2.6: Sort notes by due date**](#426-use-case-fr426-sort-notes-by-due-date)        
		- [4.2.7. **Use Case FR4.2.7: Sort notes by  Priority – ranged as 1st, 2nd and 3d**](#427-use-case-fr427-sort-notes-by--priority--ranged-as-1st-2nd-and-3d) 
		- [4.2.8. **Use Case FR4.2.8: Archived notes in drop down menu**](#428-use-case-fr428-archived-notes-in-drop-down-menu)        
		- [4.2.9. **Use Case FR4.2.9: Search a note**](#429-use-case-fr429-search-a-note)
- [5. **Non-Functional Requirements**](#5-non-functional-requirements)
    - [5.1. **Performance Requirements**](#51-performance-requirements)    
	- [5.2. **Safety Requirements**](#52-safety-requirements)    
	- [5.3. **Security Requirements**](#53-security-requirements)    
	- [5.4. **Software Quality Atributes**](#54-software-quality-atributes)
- [6. **Other Requirements**](#6-other-requirements)								
</details>

## 1. **Introduction**
This section gives a scope description and overview of this Software Requirements Specification (SRS). 

### 1.1. **Purpose**
The purpose of this document is to give a detailed description of the requirements for the “mNotes“ software. It will describe the required features and functionality for the development of system. This document is primarily intended to be proposed to a customer for its approval and a reference for developing the first version of the system for the development team.

### 1.2. Scope
The “mNotes” is a WEB-based responsive application which helps people to keep notes, to organize their tasks with notes which can notify them with remainders before the expire date and time, those note to be cheked as “done”, and to matically be archived after the expired date and time if done. Notes should have the option to be categorized and tagged, edited, filtered by category or tag, The output is notes to be printed, converted to a PDF file or to be exported as CSV file.

## 2. Overall description
<img align="right" width="300" height="300" src="https://github.com/Terminator8/mNote/blob/master/images/1.png"><br> 
### 2.1. Design 
#### 2.1.1. Front end:
•	HTML<br>
•	Bootstrap<br>
•	CSS

#### 2.1.2. Back-end:
•	PHP
•	MySQL
### 2.2. Operating Environment
• Web Browser

## 3. User Interface Requirements
### 3.1. User Interface - Administration module:
#### 3.1.1. Login Screen:
<img align="right" width="150" height="200" src="https://github.com/Terminator8/mNote/blob/master/images/login.png"><br>
1. Title "Log in";
2. Field "email" (Username);
3. Field "Password";
4. Button "Log in";
5. Text "Do not have an account?" Register;
6. Link to Register screen from the above text "Register"

#### 3.1.2. Registration Screen
<img align="right" width="150" height="200" src="https://github.com/Terminator8/mNote/blob/master/images/Register.png"><br>
1. Title "Register";
2. Field "email" (username);
3. Field "Password";
4. Field "Password Confirmation";
5. Radio-Button “Register”;
6. Text "Already have an account?" Login;
7. Link to Login screen from the above text "Login"

#### 3.1.3. Profile Screen:
<img align="right" width="150" height="200" src="https://github.com/Terminator8/mNote/blob/master/images/Profile.png"><br>
1. Title: Profile Screen”;
2. Field "email" (username);
3. Field "new email" (new username);
4. Field "New Password";
5. Field "Password Confirmation";
6. Radio-button “Edit”;
7. Radio-button “Save”.

### 3.2. User Interface - Functional module:
#### 3.2.1. Main Screen: (From Left to Right and from Top to Down):
![Main](https://github.com/Terminator8/mNote/blob/master/images/Main_Screen.png)

**Button Open/Closed Side Bar Menu (Top-Left Side)**
1. Option "New Note";
2. Option “Sort Notes”; (sorting by Due Date, Priority, Done/Not Done);
3. Option “Archive Notes”;
4. Trash;
5. Settings.

**Search Field and Search Button(Top-Center):**
1. Field “Search” for input of Keyword;
2. Button “Search”;
Profile Icon (Top-Right):
1. Option “Edit Profile”;
2. Option “Sign Out”.

**Main Screen - Notes Icons sorted (Center):**
1. Notes Large Icons organized in rows and columns;
2. Number of Icons should be up to 6 on a row maximum down to 1 on a row minimum, depending on screen size and screen view, as well as user device type (responsive app.).
3. In vertical direction the number of rows is unlimited depending on overall number of Notes divided by number of Notes Icons in a row.
4. Default sorting is by Due Date of the Notes, from the Note with last Date and Time first.
5. Top-Down Scrolling should be available for the large lists of Notes.

#### 3.2.2. Note screen:
![Note](https://github.com/Terminator8/mNote/blob/master/images/Note_Screen.png)
1. Field Creation Date and Time (matically takes system Date and Time on New Note – Save Button click);
2. Field ”Due Date and Time”
3. Field “Title”;
4. Field “Note Body”;
5. Button “Priority”;
6. Button “Delete”;
7. Button “Edit”;
8. Button “Archive”;
9. Button “Save”.
10. Button “PRINT NOTE”;
11. Button “Convert to PDF”;
12. Button “EXPORT” to text/csv;

## 4. Functional Requirements (Use Cases)
### 4.1. Administration module Use Cases:
#### 4.1.1. Use Case FR4.1.1: User registration
Given a first-time user starts any WEB browser (Internet Explorer, Google Chrome and Mozilla Firefox and so on);
And goes to the mNotes application;
And the Log in Screen appears;
When the user clicks on the text “Do not have an Account: REGISTER”;
And the Register screen (window) appears;
Then the user should enter an email as username;
And password;
And confirmation of password;
And clics on the button Register.

#### 4.1.2. Use Case FR4.1.2: Logging in
Given the user starts any WEB browser; (Internet Explorer, Google Chrome and Mozilla Firefox and so on);
And goes to the mNotes application;
And the Log in Screen appears;
And the user enters an email as username;
And password;
When the user clicks on the Login button;
Then the user enters application;
And the main Screen appears.

#### 4.1.3. Use Case FR4.1.3: Forgotten password
Given the user starts any WEB browser (Internet Explorer, Google Chrome and Mozilla Firefox);
And goes to the mNotes application;
And the Log in Screen appears;
When the user clicks on the text Forgot your password? at the bottom of the Login Icon
And the Profile Screen appears;
And enter his/her email client application;
And clicking on the forgotten pasword link sent;
And the Profile Screen of mNote application appears;
And the user enters his email in the email tab;
And enters a new password;
And confirms it in the Confirm field;
And clicks on the Save Button;
Then the user has his password renewed.

#### 4.1.4. Use Case FR4.1.4: Editing a profile info
Given the user wants to edit his profile information e.g. change email and change password
And is logged in;
And has the main screen with the Notes sorted by due date;
When the user clicks on the right top corner on the Profile button;
And the Profile Screen appears;
Then  the user can change email or password info and save it by clicking on Save.

### 4.2. Functional module Use Cases:
#### 4.2.1. Use Case FR4.2.1: Create a New Note 
Given the user wants to create a New Note;
And is logged in;
And has the main screen with the Notes sorted by due date;
And choose from the left Side Bar menu “New Note” option;
And a Note window opens;
And current date field matically takes system date and time;
And the user fills in the due date field;
And fills in the title field;
And fills in the text field or leaves it empty;
When the user clicks on Save button;
Then the Note window closes;
And the main screen appears with the New Note icon on the first place.

#### 4.2.2. Use Case FR4.2.2: Edit a Note 
Given the user wants to edit an existing Note;
And is logged in;
And has the main screen with the Notes sorted by due date;
And clicks on chosen icon of a Note;
And the Note window opens;
And the user presses the Edit button;
And edits text in the Title or Text field of the Note;
When the user clicks on Save button;
Then the Note is saved;
And the Note window closes;
And the main screen appears with existing Notes sorted by due date;

#### 4.2.3. Use Case FR4.2.3: Delete
Given the user wants to delete a note;
And is logged in;
And has the main screen with the Notes sorted by due date;
When the user opens the Note to be deleted by clicking on it;
Then the user clicks on Delete button and removes the Note from the list.
(The Note deleted goes to Trash, it could be another table in Database);
And the main screen appears with existing Notes sorted by due date;

#### 4.2.4. Use Case FR4.2.4: Archive
Given the user wants to put a note in the archive;
And is logged in;
And has the main screen with the Notes sorted by due date;
And opens a selected note by clicking on it;
And having the note opened in full size;
When clicks the Button Archive;
Then the note will no longer appear in the list (will not be seen in the main screen);
And will go to Archive.

#### 4.2.5. Use Case FR4.2.5: Sort notes by status Done/ Not done
Given the user wants to sort notes;
And is logged in;
And has the main screen with the Notes sorted by due date;
And opens left Side Bar menu;
And choses the option Sort;
When the user clicks Sort by Done/Not Done option;
Then the user have the notes sorted by Done/Not Done starting with Done.

#### 4.2.6. Use Case FR4.2.6: Sort notes by due date
Given the user wants to sort notes;
And is logged in;
And has the main screen with the Notes sorted by due date;
And opens left dropdown menu;
And choses the option Sort;
Then the user have the notes sorted by due date;
When the user enters the Sort menu and ticks the box  by Due Date;

#### 4.2.7. Use Case FR4.2.7: Sort notes by  Priority – ranged as 1st, 2nd and 3d
Given the user wants to sort notes;
And is logged in;
And has the main screen with the Notes sorted by due date;
And opens the left Side Bar menu;
And choses the option Sort;
When the user clicks the Sort by Priority 
Then the user have the notes sorted by 1st, 2nd and 3rd  Priority;

#### 4.2.8. Use Case FR4.2.8: Archived notes in drop down menu
Given the user is loged in
And has the main screen with the Notes sorted by due date;
And cliks on Note button;
And Side Bar menu is open;
And choses the option Archived notes
When the user clicks on the Archived notes
Then a list of archived notes appears

#### 4.2.9. Use Case FR4.2.9: Search a note
Given the user is loged in
And has the main screen with the Notes sorted by due date;
And cliks on Note button;
And Side Bar menu is open;
When clicks on Archied Notes option;
Then a list of archived notes appears on Main Screen.

## 5. Non-Functional Requirements
### 5.1. Performance Requirements
The mNote application should provide excellent quality features as speed, short reaction time accuracy etc..

### 5.2. Safety Requirements
The mNote application should assures customer data confidentiality.

### 5.3. Security Requirements
The mNote application should be protected from unauthorized external or internal access with secure program codes and security solutions.

### 5.4. Software Quality Atributes
The mNotes should be  easy to use and easy to learn application with user-friendly high intuitive user interface. As a responsive WEB Aplication mNotes should have high adaptability and flexibility. For example the main Screen of the application should be flexible enough to reflect screen size and/or screen view parameters of different user devices, delivering best possible readiness of the user notes content and the best access to navigation tools, menus and radio-buttons. 

## 6. Other Requirements
The mNote application should create a positive ambiance provoking good emotions for the users trough it’s state of the art graphic design and ease of use.
