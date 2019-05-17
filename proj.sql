CREATE TABLE property
(
    propertyId INT(10) PRIMARY KEY NOT NULL,
    status BOOLEAN,
    location VARCHAR(255),
    cost INT
);
CREATE TABLE tenant
(
    tenantId INT(10) PRIMARY KEY NOT NULL,
    firstName VARCHAR(25) NOT NULL,
    lastName VARCHAR(25) NOT NULL,
    nin VARCHAR(40),
    email VARCHAR(40),
    password VARCHAR(40),
    username VARCHAR(25)
);

CREATE TABLE maintance
(
    maintanceId INT(10) PRIMARY KEY NOT NULL,
    photo,
    video,
    category VARCHAR(255) NOT NULL,
    descriptions VARCHAR(255) NOT NULL,
);
CREATE TABLE landlord
(
    firstName VARCHAR(25) NOT NULL,
    lastName VARCHAR(25) NOT NULL,
    email VARCHAR(40) NOT NULL,
    username VARCHAR(25) NOT NULL PRIMARY KEY
);