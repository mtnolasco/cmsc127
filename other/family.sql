CREATE TABLE FAMILY(
	FAM_CODE INT UNSIGNED NOT NULL,
	FAM_NAME VARCHAR(100),
	REL VARCHAR(30), -- RELATIONSHIP TO PATIENT
	FAM_AGE TINYINT(3),
	FAM_SEX CHAR(1),
	FCIV_STAT VARCHAR(30), -- POSSIBLE DROPDOWN
	FEDUC VARCHAR(50), -- POSSIBLE DROPDOWN
	FAM_OCCU VARCHAR(30), -- OCCUPATION OF FAMILY MEMBER
	REMARKS VARCHAR(100),
	FOREIGN KEY(FAM_CODE) REFERENCES FAMILY(FAM_CODE) ON UPDATE CASCADE ON DELETE CASCADE
);
