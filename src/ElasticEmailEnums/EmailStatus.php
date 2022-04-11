<?php
	namespace ElasticEmailEnums; 

class EmailStatus
{
    /**
     * Email address this email was sent from.
     */
    public /*string*/ $from;

    /**
     * Email address this email was sent to.
     */
    public /*string*/ $to;

    /**
     * Date the email was submitted.
     */
    public /*DateTime*/ $date;

    /**
     * Value of email's status
     */
    public /*\ElasticEmailEnums\LogJobStatus*/ $status;

    /**
     * Name of email's status
     */
    public /*string*/ $statusname;

    /**
     * Date of last status change.
     */
    public /*DateTime*/ $Statuschangedate;

    /**
     * Date when the email was sent
     */
    public /*DateTime*/ $datesent;

    /**
     * Date when the email changed the status to 'opened'
     */
    public /*?DateTime*/ $dateopened;

    /**
     * Date when the email changed the status to 'clicked'
     */
    public /*?DateTime*/ $dateclicked;

    /**
     * Detailed error or bounced message.
     */
    public /*string*/ $errormessage;

    /**
     * ID number of transaction
     */
    public /*Guid*/ $transactionid;

}
