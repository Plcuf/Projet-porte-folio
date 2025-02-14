CREATE TABLE IF NOT EXISTS Skills(
    Skill_Id INTEGER NOT NULL AUTO_INCREMENT,
    Skill_Name VARCHAR(20) NOT NULL,
    Skill_Description VARCHAR(100),
    PRIMARY KEY(Skill_id)
)

CREATE TABLE IF NOT EXISTS User(
    User_Id INTEGER NOT NULL AUTO_INCREMENT,
    First_Name VARCHAR(50) NOT NULL,
    Last_Name VARCHAR(50) NOT NULL,
    Is_Admin BOOLEAN NOT NULL,
    Email VARCHAR(50),
    Password VARCHAR(50),
    PRIMARY KEY(User_Id),
    UNIQUE(Email)
)

CREATE TABLE IF NOT EXISTS Has_Skill(
    User_Id INTEGER NOT NULL,
    Skill_Id INTEGER NOT NULL,
    Skill_Level INTEGER,
    PRIMARY KEY(User_Id, Skill_Id)
)

CREATE TABLE IF NOT EXISTS Projects(
    Project_Id INTEGER NOT NULL AUTO_INCREMENT,
    User_Id INTEGER NOT NULL,
    Project_Name VARCHAR(50) NOT NULL,
    Project_Description VARCHAR(100),
    Project_Url VARCHAR(100),
    Project_Image VARCHAR(100),
    PRIMARY KEY(Project_Id)
)