-- v_approved_application_form
SELECT
	`b`.`BUSINESS_ID` AS `BUSINESS_ID`,
	`b`.`BUSINESS_NAME` AS `BUSINESS_NAME`,
	`b`.`TRADE_NAME` AS `TRADE_NAME`,
	`b`.`BUSINESS_OWNER_FIRSTNAME` AS `BUSINESS_OWNER_FIRSTNAME`,
	`b`.`BUSINESS_OWNER_MIDDLENAME` AS `BUSINESS_OWNER_MIDDLENAME`,
	`b`.`BUSINESS_OWNER_LASTNAME` AS `BUSINESS_OWNER_LASTNAME`,
	concat(
	ifnull( `b`.`BUILDING_NAME`, '' ),
	' ',
	ifnull( `b`.`BUILDING_NUMBER`, '' ),
IF
	( isnull( `b`.`UNIT_NO` ), '', ' Unit ' ),
	ifnull( `b`.`UNIT_NO`, '' ),
	' ',
	ifnull( `b`.`STREET`, '' ),
	' ',
	ifnull( `b`.`SITIO`, '' ),
	' ',
	ifnull( `b`.`SUBDIVISION`, '' ) 
	) AS `BUSINESS_ADDRESS`,
	`b`.`BUSINESS_OR_NUMBER` AS `BUSINESS_OR_NUMBER`,
	`b`.`BUSINESS_OR_ACQUIRED_DATE` AS `BUSINESS_OR_ACQUIRED_DATE`,
	`b`.`TIN_NO` AS `TIN_NO`,
	`b`.`DTI_REGISTRATION_NO` AS `DTI_REGISTRATION_NO`,
	`b`.`BUSINESS_POSTAL_CODE` AS `BUSINESS_POSTAL_CODE`,
	`b`.`BUSINESS_EMAIL_ADD` AS `BUSINESS_EMAIL_ADD`,
	`b`.`BUSINESS_TELEPHONE_NO` AS `BUSINESS_TELEPHONE_NO`,
	`b`.`BUSINESS_AREA` AS `BUSINESS_AREA`,
	`n`.`BUSINESS_NATURE_NAME` AS `BUSINESS_NATURE_NAME`,
	timestampdiff( YEAR, `b`.`BUSINESS_OR_ACQUIRED_DATE`, curdate( ) ) AS `BUSINESS_PERIOD_YEAR`,
	timestampdiff( MONTH, `b`.`BUSINESS_OR_ACQUIRED_DATE`, curdate( ) ) AS `BUSINESS_PERIOD_MONTH`,
	`af`.`STATUS` AS `STATUS`,
	`af`.`FORM_ID` AS `FORM_ID`,
	( SELECT `r_paper_type`.`PAPER_TYPE_NAME` FROM `r_paper_type` WHERE ( `r_paper_type`.`PAPER_TYPE_ID` = `af`.`REQUESTED_PAPER_TYPE_ID` ) ) AS `REQUESTED_PAPER_TYPE`,
	( SELECT `r_paper_type`.`PAPER_TYPE_NAME` FROM `r_paper_type` WHERE ( `r_paper_type`.`PAPER_TYPE_ID` = `af`.`PAPER_TYPE_ID` ) ) AS `FORM_PAPER_TYPE`,
	`af`.`REQUESTED_PAPER_TYPE_ID` AS `REQUESTED_PAPER_TYPE_ID`,
	`af`.`PAPER_TYPE_ID` AS `PAPER_TYPE_ID` ,
	DATE(af.FORM_DATE) AS FORM_DATE
FROM
	(
	(
	( `t_business_information` `b` LEFT JOIN `r_business_nature` `n` ON ( ( `n`.`BUSINESS_NATURE_ID` = `b`.`BUSINESS_NATURE_ID` ) ) )
	JOIN `t_application_form` `af` ON ( ( `af`.`BUSINESS_ID` = `b`.`BUSINESS_ID` ) ) 
	)
	JOIN `r_paper_type` `pt` ON ( ( `pt`.`PAPER_TYPE_ID` = `af`.`PAPER_TYPE_ID` ) ) 
	) 
WHERE
	( ( `b`.`STATUS` = 'Approved' ) AND ( `af`.`STATUS` = 'Approved' ) ) 


-- v_pending_application_form
SELECT
	`b`.`BUSINESS_ID` AS `BUSINESS_ID`,
	`b`.`BUSINESS_NAME` AS `BUSINESS_NAME`,
	`b`.`TRADE_NAME` AS `TRADE_NAME`,
	`b`.`BUSINESS_OWNER_FIRSTNAME` AS `BUSINESS_OWNER_FIRSTNAME`,
	`b`.`BUSINESS_OWNER_MIDDLENAME` AS `BUSINESS_OWNER_MIDDLENAME`,
	`b`.`BUSINESS_OWNER_LASTNAME` AS `BUSINESS_OWNER_LASTNAME`,
	concat(
	ifnull( `b`.`BUILDING_NAME`, '' ),
	' ',
	ifnull( `b`.`BUILDING_NUMBER`, '' ),
IF
	( isnull( `b`.`UNIT_NO` ), '', ' Unit ' ),
	ifnull( `b`.`UNIT_NO`, '' ),
	' ',
	ifnull( `b`.`STREET`, '' ),
	' ',
	ifnull( `b`.`SITIO`, '' ),
	' ',
	ifnull( `b`.`SUBDIVISION`, '' ) 
	) AS `BUSINESS_ADDRESS`,
	`b`.`BUSINESS_OR_NUMBER` AS `BUSINESS_OR_NUMBER`,
	`b`.`BUSINESS_OR_ACQUIRED_DATE` AS `BUSINESS_OR_ACQUIRED_DATE`,
	`b`.`TIN_NO` AS `TIN_NO`,
	`b`.`DTI_REGISTRATION_NO` AS `DTI_REGISTRATION_NO`,
	`b`.`BUSINESS_POSTAL_CODE` AS `BUSINESS_POSTAL_CODE`,
	`b`.`BUSINESS_EMAIL_ADD` AS `BUSINESS_EMAIL_ADD`,
	`b`.`BUSINESS_TELEPHONE_NO` AS `BUSINESS_TELEPHONE_NO`,
	`b`.`BUSINESS_AREA` AS `BUSINESS_AREA`,
	`n`.`BUSINESS_NATURE_NAME` AS `BUSINESS_NATURE_NAME`,
	timestampdiff( YEAR, `b`.`BUSINESS_OR_ACQUIRED_DATE`, curdate( ) ) AS `BUSINESS_PERIOD_YEAR`,
	timestampdiff( MONTH, `b`.`BUSINESS_OR_ACQUIRED_DATE`, curdate( ) ) AS `BUSINESS_PERIOD_MONTH`,
	`af`.`STATUS` AS `STATUS`,
	`af`.`FORM_ID` AS `FORM_ID`,
	( SELECT `r_paper_type`.`PAPER_TYPE_NAME` FROM `r_paper_type` WHERE ( `r_paper_type`.`PAPER_TYPE_ID` = `af`.`REQUESTED_PAPER_TYPE_ID` ) ) AS `REQUESTED_PAPER_TYPE`,
	( SELECT `r_paper_type`.`PAPER_TYPE_NAME` FROM `r_paper_type` WHERE ( `r_paper_type`.`PAPER_TYPE_ID` = `af`.`PAPER_TYPE_ID` ) ) AS `FORM_PAPER_TYPE`,
	`af`.`REQUESTED_PAPER_TYPE_ID` AS `REQUESTED_PAPER_TYPE_ID`,
	`af`.`PAPER_TYPE_ID` AS `PAPER_TYPE_ID` ,
	DATE(af.FORM_DATE) AS FORM_DATE
FROM
	(
	(
	( `t_business_information` `b` LEFT JOIN `r_business_nature` `n` ON ( ( `n`.`BUSINESS_NATURE_ID` = `b`.`BUSINESS_NATURE_ID` ) ) )
	JOIN `t_application_form` `af` ON ( ( `af`.`BUSINESS_ID` = `b`.`BUSINESS_ID` ) ) 
	)
	JOIN `r_paper_type` `pt` ON ( ( `pt`.`PAPER_TYPE_ID` = `af`.`PAPER_TYPE_ID` ) ) 
	) 
WHERE
	( ( `b`.`STATUS` = 'Approved' ) AND ( `af`.`STATUS` = 'Pending' ) ) 


-- v_business_permit

SELECT
	`business`.`BUSINESS_NAME` AS `BUSINESS_NAME`,
	concat(
	ifnull( `business`.`BUILDING_NAME`, '' ),
	' ',
	ifnull( `business`.`BUILDING_NUMBER`, '' ),
IF
	( isnull( `business`.`UNIT_NO` ), '', ' Unit ' ),
	ifnull( `business`.`UNIT_NO`, '' ),
	' ',
	ifnull( `business`.`STREET`, '' ),
	' ',
	ifnull( `business`.`SITIO`, '' ),
	' ',
	ifnull( `business`.`SUBDIVISION`, '' ) 
	) AS `BUSINESS_ADDRESS`,
	`lob`.`LINE_OF_BUSINESS_NAME` AS `BUSINESS_NATURE_NAME`,
	`permit`.`TAX_YEAR` AS `TAX_YEAR`,
	`permit`.`QUARTER` AS `QUARTER`,
	`clearance`.`OR_NO` AS `OR_NO`,
	`clearance`.`OR_AMOUNT` AS `OR_AMOUNT`,
	DATE(`clearance`.`OR_DATE`) AS `OR_DATE`,
	`permit`.`BARANGAY_PERMIT` AS `BARANGAY_PERMIT`,
	`permit`.`BUSINESS_TAX` AS `BUSINESS_TAX`,
	`permit`.`GARBAGE_FEE` AS `GARBAGE_FEE`,
	`permit`.`SIGNBOARD` AS `SIGNBOARD`,
	`permit`.`CTC` AS `CTC`,
	`form`.`FORM_ID` AS `FORM_ID` 
FROM
	(
	(
	(
	(
	( `t_business_information` `business` JOIN `t_application_form` `form` ON ( ( `business`.`BUSINESS_ID` = `form`.`BUSINESS_ID` ) ) )
	JOIN `t_bf_business_permit` `permit` ON ( ( `permit`.`FORM_ID` = `form`.`FORM_ID` ) ) 
	)
	JOIN `t_clearance_certification` `clearance` ON ( ( `clearance`.`FORM_ID` = `form`.`FORM_ID` ) ) 
	)
	LEFT JOIN `t_bf_business_activity` `activity` ON ( ( `activity`.`BUSINESS_ID` = `business`.`BUSINESS_ID` ) ) 
	)
	LEFT JOIN `r_bf_line_of_business` `lob` ON ( ( `lob`.`LINE_OF_BUSINESS_ID` = `activity`.`LINE_OF_BUSINESS_ID` ) ) 
	) 