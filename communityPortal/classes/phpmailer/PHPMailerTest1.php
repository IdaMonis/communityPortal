<?php
require_once 'classes/phpmailer/PHPMailer-5.2-stable/class.phpmailer.php';

/**
 * PHPMailer test case.
 */
class PHPMailerTest1 extends PHPUnit_Framework_TestCase
{

    /**
     *
     * @var PHPMailer
     */
    private $pHPMailer;

    /**
     * Prepares the environment before running a test.
     */
    protected function setUp()
    {
        parent::setUp();
        
        // TODO Auto-generated PHPMailerTest1::setUp()
        
        $this->pHPMailer = new PHPMailer(/* parameters */);
    }

    /**
     * Cleans up the environment after running a test.
     */
    protected function tearDown()
    {
        // TODO Auto-generated PHPMailerTest1::tearDown()
        $this->pHPMailer = null;
        
        parent::tearDown();
    }

    /**
     * Constructs the test case.
     */
    public function __construct()
    {
        // TODO Auto-generated constructor
    }

    /**
     * Tests PHPMailer->__construct()
     */
    public function test__construct()
    {
        // TODO Auto-generated PHPMailerTest1->test__construct()
        $this->markTestIncomplete("__construct test not implemented");
        
        $this->pHPMailer->__construct(/* parameters */);
    }

    /**
     * Tests PHPMailer->__destruct()
     */
    public function test__destruct()
    {
        // TODO Auto-generated PHPMailerTest1->test__destruct()
        $this->markTestIncomplete("__destruct test not implemented");
        
        $this->pHPMailer->__destruct(/* parameters */);
    }

    /**
     * Tests PHPMailer->isHTML()
     */
    public function testIsHTML()
    {
        // TODO Auto-generated PHPMailerTest1->testIsHTML()
        $this->markTestIncomplete("isHTML test not implemented");
        
        $this->pHPMailer->isHTML(/* parameters */);
    }

    /**
     * Tests PHPMailer->isSMTP()
     */
    public function testIsSMTP()
    {
        // TODO Auto-generated PHPMailerTest1->testIsSMTP()
        $this->markTestIncomplete("isSMTP test not implemented");
        
        $this->pHPMailer->isSMTP(/* parameters */);
    }

    /**
     * Tests PHPMailer->isMail()
     */
    public function testIsMail()
    {
        // TODO Auto-generated PHPMailerTest1->testIsMail()
        $this->markTestIncomplete("isMail test not implemented");
        
        $this->pHPMailer->isMail(/* parameters */);
    }

    /**
     * Tests PHPMailer->isSendmail()
     */
    public function testIsSendmail()
    {
        // TODO Auto-generated PHPMailerTest1->testIsSendmail()
        $this->markTestIncomplete("isSendmail test not implemented");
        
        $this->pHPMailer->isSendmail(/* parameters */);
    }

    /**
     * Tests PHPMailer->isQmail()
     */
    public function testIsQmail()
    {
        // TODO Auto-generated PHPMailerTest1->testIsQmail()
        $this->markTestIncomplete("isQmail test not implemented");
        
        $this->pHPMailer->isQmail(/* parameters */);
    }

    /**
     * Tests PHPMailer->addAddress()
     */
    public function testAddAddress()
    {
        // TODO Auto-generated PHPMailerTest1->testAddAddress()
        $this->markTestIncomplete("addAddress test not implemented");
        
        $this->pHPMailer->addAddress(/* parameters */);
    }

    /**
     * Tests PHPMailer->addCC()
     */
    public function testAddCC()
    {
        // TODO Auto-generated PHPMailerTest1->testAddCC()
        $this->markTestIncomplete("addCC test not implemented");
        
        $this->pHPMailer->addCC(/* parameters */);
    }

    /**
     * Tests PHPMailer->addBCC()
     */
    public function testAddBCC()
    {
        // TODO Auto-generated PHPMailerTest1->testAddBCC()
        $this->markTestIncomplete("addBCC test not implemented");
        
        $this->pHPMailer->addBCC(/* parameters */);
    }

    /**
     * Tests PHPMailer->addReplyTo()
     */
    public function testAddReplyTo()
    {
        // TODO Auto-generated PHPMailerTest1->testAddReplyTo()
        $this->markTestIncomplete("addReplyTo test not implemented");
        
        $this->pHPMailer->addReplyTo(/* parameters */);
    }

    /**
     * Tests PHPMailer->parseAddresses()
     */
    public function testParseAddresses()
    {
        // TODO Auto-generated PHPMailerTest1->testParseAddresses()
        $this->markTestIncomplete("parseAddresses test not implemented");
        
        $this->pHPMailer->parseAddresses(/* parameters */);
    }

    /**
     * Tests PHPMailer->setFrom()
     */
    public function testSetFrom()
    {
        // TODO Auto-generated PHPMailerTest1->testSetFrom()
        $this->markTestIncomplete("setFrom test not implemented");
        
        $this->pHPMailer->setFrom(/* parameters */);
    }

    /**
     * Tests PHPMailer->getLastMessageID()
     */
    public function testGetLastMessageID()
    {
        // TODO Auto-generated PHPMailerTest1->testGetLastMessageID()
        $this->markTestIncomplete("getLastMessageID test not implemented");
        
        $this->pHPMailer->getLastMessageID(/* parameters */);
    }

    /**
     * Tests PHPMailer::validateAddress()
     */
    public function testValidateAddress()
    {
        // TODO Auto-generated PHPMailerTest1::testValidateAddress()
        $this->markTestIncomplete("validateAddress test not implemented");
        
        PHPMailer::validateAddress(/* parameters */);
    }

    /**
     * Tests PHPMailer->idnSupported()
     */
    public function testIdnSupported()
    {
        // TODO Auto-generated PHPMailerTest1->testIdnSupported()
        $this->markTestIncomplete("idnSupported test not implemented");
        
        $this->pHPMailer->idnSupported(/* parameters */);
    }

    /**
     * Tests PHPMailer->punyencodeAddress()
     */
    public function testPunyencodeAddress()
    {
        // TODO Auto-generated PHPMailerTest1->testPunyencodeAddress()
        $this->markTestIncomplete("punyencodeAddress test not implemented");
        
        $this->pHPMailer->punyencodeAddress(/* parameters */);
    }

    /**
     * Tests PHPMailer->send()
     */
    public function testSend()
    {
        // TODO Auto-generated PHPMailerTest1->testSend()
        $this->markTestIncomplete("send test not implemented");
        
        $this->pHPMailer->send(/* parameters */);
    }

    /**
     * Tests PHPMailer->preSend()
     */
    public function testPreSend()
    {
        // TODO Auto-generated PHPMailerTest1->testPreSend()
        $this->markTestIncomplete("preSend test not implemented");
        
        $this->pHPMailer->preSend(/* parameters */);
    }

    /**
     * Tests PHPMailer->postSend()
     */
    public function testPostSend()
    {
        // TODO Auto-generated PHPMailerTest1->testPostSend()
        $this->markTestIncomplete("postSend test not implemented");
        
        $this->pHPMailer->postSend(/* parameters */);
    }

    /**
     * Tests PHPMailer->getSMTPInstance()
     */
    public function testGetSMTPInstance()
    {
        // TODO Auto-generated PHPMailerTest1->testGetSMTPInstance()
        $this->markTestIncomplete("getSMTPInstance test not implemented");
        
        $this->pHPMailer->getSMTPInstance(/* parameters */);
    }

    /**
     * Tests PHPMailer->smtpConnect()
     */
    public function testSmtpConnect()
    {
        // TODO Auto-generated PHPMailerTest1->testSmtpConnect()
        $this->markTestIncomplete("smtpConnect test not implemented");
        
        $this->pHPMailer->smtpConnect(/* parameters */);
    }

    /**
     * Tests PHPMailer->smtpClose()
     */
    public function testSmtpClose()
    {
        // TODO Auto-generated PHPMailerTest1->testSmtpClose()
        $this->markTestIncomplete("smtpClose test not implemented");
        
        $this->pHPMailer->smtpClose(/* parameters */);
    }

    /**
     * Tests PHPMailer->setLanguage()
     */
    public function testSetLanguage()
    {
        // TODO Auto-generated PHPMailerTest1->testSetLanguage()
        $this->markTestIncomplete("setLanguage test not implemented");
        
        $this->pHPMailer->setLanguage(/* parameters */);
    }

    /**
     * Tests PHPMailer->getTranslations()
     */
    public function testGetTranslations()
    {
        // TODO Auto-generated PHPMailerTest1->testGetTranslations()
        $this->markTestIncomplete("getTranslations test not implemented");
        
        $this->pHPMailer->getTranslations(/* parameters */);
    }

    /**
     * Tests PHPMailer->addrAppend()
     */
    public function testAddrAppend()
    {
        // TODO Auto-generated PHPMailerTest1->testAddrAppend()
        $this->markTestIncomplete("addrAppend test not implemented");
        
        $this->pHPMailer->addrAppend(/* parameters */);
    }

    /**
     * Tests PHPMailer->addrFormat()
     */
    public function testAddrFormat()
    {
        // TODO Auto-generated PHPMailerTest1->testAddrFormat()
        $this->markTestIncomplete("addrFormat test not implemented");
        
        $this->pHPMailer->addrFormat(/* parameters */);
    }

    /**
     * Tests PHPMailer->wrapText()
     */
    public function testWrapText()
    {
        // TODO Auto-generated PHPMailerTest1->testWrapText()
        $this->markTestIncomplete("wrapText test not implemented");
        
        $this->pHPMailer->wrapText(/* parameters */);
    }

    /**
     * Tests PHPMailer->utf8CharBoundary()
     */
    public function testUtf8CharBoundary()
    {
        // TODO Auto-generated PHPMailerTest1->testUtf8CharBoundary()
        $this->markTestIncomplete("utf8CharBoundary test not implemented");
        
        $this->pHPMailer->utf8CharBoundary(/* parameters */);
    }

    /**
     * Tests PHPMailer->setWordWrap()
     */
    public function testSetWordWrap()
    {
        // TODO Auto-generated PHPMailerTest1->testSetWordWrap()
        $this->markTestIncomplete("setWordWrap test not implemented");
        
        $this->pHPMailer->setWordWrap(/* parameters */);
    }

    /**
     * Tests PHPMailer->createHeader()
     */
    public function testCreateHeader()
    {
        // TODO Auto-generated PHPMailerTest1->testCreateHeader()
        $this->markTestIncomplete("createHeader test not implemented");
        
        $this->pHPMailer->createHeader(/* parameters */);
    }

    /**
     * Tests PHPMailer->getMailMIME()
     */
    public function testGetMailMIME()
    {
        // TODO Auto-generated PHPMailerTest1->testGetMailMIME()
        $this->markTestIncomplete("getMailMIME test not implemented");
        
        $this->pHPMailer->getMailMIME(/* parameters */);
    }

    /**
     * Tests PHPMailer->getSentMIMEMessage()
     */
    public function testGetSentMIMEMessage()
    {
        // TODO Auto-generated PHPMailerTest1->testGetSentMIMEMessage()
        $this->markTestIncomplete("getSentMIMEMessage test not implemented");
        
        $this->pHPMailer->getSentMIMEMessage(/* parameters */);
    }

    /**
     * Tests PHPMailer->createBody()
     */
    public function testCreateBody()
    {
        // TODO Auto-generated PHPMailerTest1->testCreateBody()
        $this->markTestIncomplete("createBody test not implemented");
        
        $this->pHPMailer->createBody(/* parameters */);
    }

    /**
     * Tests PHPMailer->headerLine()
     */
    public function testHeaderLine()
    {
        // TODO Auto-generated PHPMailerTest1->testHeaderLine()
        $this->markTestIncomplete("headerLine test not implemented");
        
        $this->pHPMailer->headerLine(/* parameters */);
    }

    /**
     * Tests PHPMailer->textLine()
     */
    public function testTextLine()
    {
        // TODO Auto-generated PHPMailerTest1->testTextLine()
        $this->markTestIncomplete("textLine test not implemented");
        
        $this->pHPMailer->textLine(/* parameters */);
    }

    /**
     * Tests PHPMailer->addAttachment()
     */
    public function testAddAttachment()
    {
        // TODO Auto-generated PHPMailerTest1->testAddAttachment()
        $this->markTestIncomplete("addAttachment test not implemented");
        
        $this->pHPMailer->addAttachment(/* parameters */);
    }

    /**
     * Tests PHPMailer->getAttachments()
     */
    public function testGetAttachments()
    {
        // TODO Auto-generated PHPMailerTest1->testGetAttachments()
        $this->markTestIncomplete("getAttachments test not implemented");
        
        $this->pHPMailer->getAttachments(/* parameters */);
    }

    /**
     * Tests PHPMailer->encodeString()
     */
    public function testEncodeString()
    {
        // TODO Auto-generated PHPMailerTest1->testEncodeString()
        $this->markTestIncomplete("encodeString test not implemented");
        
        $this->pHPMailer->encodeString(/* parameters */);
    }

    /**
     * Tests PHPMailer->encodeHeader()
     */
    public function testEncodeHeader()
    {
        // TODO Auto-generated PHPMailerTest1->testEncodeHeader()
        $this->markTestIncomplete("encodeHeader test not implemented");
        
        $this->pHPMailer->encodeHeader(/* parameters */);
    }

    /**
     * Tests PHPMailer->hasMultiBytes()
     */
    public function testHasMultiBytes()
    {
        // TODO Auto-generated PHPMailerTest1->testHasMultiBytes()
        $this->markTestIncomplete("hasMultiBytes test not implemented");
        
        $this->pHPMailer->hasMultiBytes(/* parameters */);
    }

    /**
     * Tests PHPMailer->has8bitChars()
     */
    public function testHas8bitChars()
    {
        // TODO Auto-generated PHPMailerTest1->testHas8bitChars()
        $this->markTestIncomplete("has8bitChars test not implemented");
        
        $this->pHPMailer->has8bitChars(/* parameters */);
    }

    /**
     * Tests PHPMailer->base64EncodeWrapMB()
     */
    public function testBase64EncodeWrapMB()
    {
        // TODO Auto-generated PHPMailerTest1->testBase64EncodeWrapMB()
        $this->markTestIncomplete("base64EncodeWrapMB test not implemented");
        
        $this->pHPMailer->base64EncodeWrapMB(/* parameters */);
    }

    /**
     * Tests PHPMailer->encodeQP()
     */
    public function testEncodeQP()
    {
        // TODO Auto-generated PHPMailerTest1->testEncodeQP()
        $this->markTestIncomplete("encodeQP test not implemented");
        
        $this->pHPMailer->encodeQP(/* parameters */);
    }

    /**
     * Tests PHPMailer->encodeQPphp()
     */
    public function testEncodeQPphp()
    {
        // TODO Auto-generated PHPMailerTest1->testEncodeQPphp()
        $this->markTestIncomplete("encodeQPphp test not implemented");
        
        $this->pHPMailer->encodeQPphp(/* parameters */);
    }

    /**
     * Tests PHPMailer->encodeQ()
     */
    public function testEncodeQ()
    {
        // TODO Auto-generated PHPMailerTest1->testEncodeQ()
        $this->markTestIncomplete("encodeQ test not implemented");
        
        $this->pHPMailer->encodeQ(/* parameters */);
    }

    /**
     * Tests PHPMailer->addStringAttachment()
     */
    public function testAddStringAttachment()
    {
        // TODO Auto-generated PHPMailerTest1->testAddStringAttachment()
        $this->markTestIncomplete("addStringAttachment test not implemented");
        
        $this->pHPMailer->addStringAttachment(/* parameters */);
    }

    /**
     * Tests PHPMailer->addEmbeddedImage()
     */
    public function testAddEmbeddedImage()
    {
        // TODO Auto-generated PHPMailerTest1->testAddEmbeddedImage()
        $this->markTestIncomplete("addEmbeddedImage test not implemented");
        
        $this->pHPMailer->addEmbeddedImage(/* parameters */);
    }

    /**
     * Tests PHPMailer->addStringEmbeddedImage()
     */
    public function testAddStringEmbeddedImage()
    {
        // TODO Auto-generated PHPMailerTest1->testAddStringEmbeddedImage()
        $this->markTestIncomplete("addStringEmbeddedImage test not implemented");
        
        $this->pHPMailer->addStringEmbeddedImage(/* parameters */);
    }

    /**
     * Tests PHPMailer->inlineImageExists()
     */
    public function testInlineImageExists()
    {
        // TODO Auto-generated PHPMailerTest1->testInlineImageExists()
        $this->markTestIncomplete("inlineImageExists test not implemented");
        
        $this->pHPMailer->inlineImageExists(/* parameters */);
    }

    /**
     * Tests PHPMailer->attachmentExists()
     */
    public function testAttachmentExists()
    {
        // TODO Auto-generated PHPMailerTest1->testAttachmentExists()
        $this->markTestIncomplete("attachmentExists test not implemented");
        
        $this->pHPMailer->attachmentExists(/* parameters */);
    }

    /**
     * Tests PHPMailer->alternativeExists()
     */
    public function testAlternativeExists()
    {
        // TODO Auto-generated PHPMailerTest1->testAlternativeExists()
        $this->markTestIncomplete("alternativeExists test not implemented");
        
        $this->pHPMailer->alternativeExists(/* parameters */);
    }

    /**
     * Tests PHPMailer->clearQueuedAddresses()
     */
    public function testClearQueuedAddresses()
    {
        // TODO Auto-generated PHPMailerTest1->testClearQueuedAddresses()
        $this->markTestIncomplete("clearQueuedAddresses test not implemented");
        
        $this->pHPMailer->clearQueuedAddresses(/* parameters */);
    }

    /**
     * Tests PHPMailer->clearAddresses()
     */
    public function testClearAddresses()
    {
        // TODO Auto-generated PHPMailerTest1->testClearAddresses()
        $this->markTestIncomplete("clearAddresses test not implemented");
        
        $this->pHPMailer->clearAddresses(/* parameters */);
    }

    /**
     * Tests PHPMailer->clearCCs()
     */
    public function testClearCCs()
    {
        // TODO Auto-generated PHPMailerTest1->testClearCCs()
        $this->markTestIncomplete("clearCCs test not implemented");
        
        $this->pHPMailer->clearCCs(/* parameters */);
    }

    /**
     * Tests PHPMailer->clearBCCs()
     */
    public function testClearBCCs()
    {
        // TODO Auto-generated PHPMailerTest1->testClearBCCs()
        $this->markTestIncomplete("clearBCCs test not implemented");
        
        $this->pHPMailer->clearBCCs(/* parameters */);
    }

    /**
     * Tests PHPMailer->clearReplyTos()
     */
    public function testClearReplyTos()
    {
        // TODO Auto-generated PHPMailerTest1->testClearReplyTos()
        $this->markTestIncomplete("clearReplyTos test not implemented");
        
        $this->pHPMailer->clearReplyTos(/* parameters */);
    }

    /**
     * Tests PHPMailer->clearAllRecipients()
     */
    public function testClearAllRecipients()
    {
        // TODO Auto-generated PHPMailerTest1->testClearAllRecipients()
        $this->markTestIncomplete("clearAllRecipients test not implemented");
        
        $this->pHPMailer->clearAllRecipients(/* parameters */);
    }

    /**
     * Tests PHPMailer->clearAttachments()
     */
    public function testClearAttachments()
    {
        // TODO Auto-generated PHPMailerTest1->testClearAttachments()
        $this->markTestIncomplete("clearAttachments test not implemented");
        
        $this->pHPMailer->clearAttachments(/* parameters */);
    }

    /**
     * Tests PHPMailer->clearCustomHeaders()
     */
    public function testClearCustomHeaders()
    {
        // TODO Auto-generated PHPMailerTest1->testClearCustomHeaders()
        $this->markTestIncomplete("clearCustomHeaders test not implemented");
        
        $this->pHPMailer->clearCustomHeaders(/* parameters */);
    }

    /**
     * Tests PHPMailer::rfcDate()
     */
    public function testRfcDate()
    {
        // TODO Auto-generated PHPMailerTest1::testRfcDate()
        $this->markTestIncomplete("rfcDate test not implemented");
        
        PHPMailer::rfcDate(/* parameters */);
    }

    /**
     * Tests PHPMailer->isError()
     */
    public function testIsError()
    {
        // TODO Auto-generated PHPMailerTest1->testIsError()
        $this->markTestIncomplete("isError test not implemented");
        
        $this->pHPMailer->isError(/* parameters */);
    }

    /**
     * Tests PHPMailer->fixEOL()
     */
    public function testFixEOL()
    {
        // TODO Auto-generated PHPMailerTest1->testFixEOL()
        $this->markTestIncomplete("fixEOL test not implemented");
        
        $this->pHPMailer->fixEOL(/* parameters */);
    }

    /**
     * Tests PHPMailer->addCustomHeader()
     */
    public function testAddCustomHeader()
    {
        // TODO Auto-generated PHPMailerTest1->testAddCustomHeader()
        $this->markTestIncomplete("addCustomHeader test not implemented");
        
        $this->pHPMailer->addCustomHeader(/* parameters */);
    }

    /**
     * Tests PHPMailer->getCustomHeaders()
     */
    public function testGetCustomHeaders()
    {
        // TODO Auto-generated PHPMailerTest1->testGetCustomHeaders()
        $this->markTestIncomplete("getCustomHeaders test not implemented");
        
        $this->pHPMailer->getCustomHeaders(/* parameters */);
    }

    /**
     * Tests PHPMailer->msgHTML()
     */
    public function testMsgHTML()
    {
        // TODO Auto-generated PHPMailerTest1->testMsgHTML()
        $this->markTestIncomplete("msgHTML test not implemented");
        
        $this->pHPMailer->msgHTML(/* parameters */);
    }

    /**
     * Tests PHPMailer->html2text()
     */
    public function testHtml2text()
    {
        // TODO Auto-generated PHPMailerTest1->testHtml2text()
        $this->markTestIncomplete("html2text test not implemented");
        
        $this->pHPMailer->html2text(/* parameters */);
    }

    /**
     * Tests PHPMailer::_mime_types()
     */
    public function test_mime_types()
    {
        // TODO Auto-generated PHPMailerTest1::test_mime_types()
        $this->markTestIncomplete("_mime_types test not implemented");
        
        PHPMailer::_mime_types(/* parameters */);
    }

    /**
     * Tests PHPMailer::filenameToType()
     */
    public function testFilenameToType()
    {
        // TODO Auto-generated PHPMailerTest1::testFilenameToType()
        $this->markTestIncomplete("filenameToType test not implemented");
        
        PHPMailer::filenameToType(/* parameters */);
    }

    /**
     * Tests PHPMailer::mb_pathinfo()
     */
    public function testMb_pathinfo()
    {
        // TODO Auto-generated PHPMailerTest1::testMb_pathinfo()
        $this->markTestIncomplete("mb_pathinfo test not implemented");
        
        PHPMailer::mb_pathinfo(/* parameters */);
    }

    /**
     * Tests PHPMailer->set()
     */
    public function testSet()
    {
        // TODO Auto-generated PHPMailerTest1->testSet()
        $this->markTestIncomplete("set test not implemented");
        
        $this->pHPMailer->set(/* parameters */);
    }

    /**
     * Tests PHPMailer->secureHeader()
     */
    public function testSecureHeader()
    {
        // TODO Auto-generated PHPMailerTest1->testSecureHeader()
        $this->markTestIncomplete("secureHeader test not implemented");
        
        $this->pHPMailer->secureHeader(/* parameters */);
    }

    /**
     * Tests PHPMailer::normalizeBreaks()
     */
    public function testNormalizeBreaks()
    {
        // TODO Auto-generated PHPMailerTest1::testNormalizeBreaks()
        $this->markTestIncomplete("normalizeBreaks test not implemented");
        
        PHPMailer::normalizeBreaks(/* parameters */);
    }

    /**
     * Tests PHPMailer->sign()
     */
    public function testSign()
    {
        // TODO Auto-generated PHPMailerTest1->testSign()
        $this->markTestIncomplete("sign test not implemented");
        
        $this->pHPMailer->sign(/* parameters */);
    }

    /**
     * Tests PHPMailer->DKIM_QP()
     */
    public function testDKIM_QP()
    {
        // TODO Auto-generated PHPMailerTest1->testDKIM_QP()
        $this->markTestIncomplete("DKIM_QP test not implemented");
        
        $this->pHPMailer->DKIM_QP(/* parameters */);
    }

    /**
     * Tests PHPMailer->DKIM_Sign()
     */
    public function testDKIM_Sign()
    {
        // TODO Auto-generated PHPMailerTest1->testDKIM_Sign()
        $this->markTestIncomplete("DKIM_Sign test not implemented");
        
        $this->pHPMailer->DKIM_Sign(/* parameters */);
    }

    /**
     * Tests PHPMailer->DKIM_HeaderC()
     */
    public function testDKIM_HeaderC()
    {
        // TODO Auto-generated PHPMailerTest1->testDKIM_HeaderC()
        $this->markTestIncomplete("DKIM_HeaderC test not implemented");
        
        $this->pHPMailer->DKIM_HeaderC(/* parameters */);
    }

    /**
     * Tests PHPMailer->DKIM_BodyC()
     */
    public function testDKIM_BodyC()
    {
        // TODO Auto-generated PHPMailerTest1->testDKIM_BodyC()
        $this->markTestIncomplete("DKIM_BodyC test not implemented");
        
        $this->pHPMailer->DKIM_BodyC(/* parameters */);
    }

    /**
     * Tests PHPMailer->DKIM_Add()
     */
    public function testDKIM_Add()
    {
        // TODO Auto-generated PHPMailerTest1->testDKIM_Add()
        $this->markTestIncomplete("DKIM_Add test not implemented");
        
        $this->pHPMailer->DKIM_Add(/* parameters */);
    }

    /**
     * Tests PHPMailer::hasLineLongerThanMax()
     */
    public function testHasLineLongerThanMax()
    {
        // TODO Auto-generated PHPMailerTest1::testHasLineLongerThanMax()
        $this->markTestIncomplete("hasLineLongerThanMax test not implemented");
        
        PHPMailer::hasLineLongerThanMax(/* parameters */);
    }

    /**
     * Tests PHPMailer->getToAddresses()
     */
    public function testGetToAddresses()
    {
        // TODO Auto-generated PHPMailerTest1->testGetToAddresses()
        $this->markTestIncomplete("getToAddresses test not implemented");
        
        $this->pHPMailer->getToAddresses(/* parameters */);
    }

    /**
     * Tests PHPMailer->getCcAddresses()
     */
    public function testGetCcAddresses()
    {
        // TODO Auto-generated PHPMailerTest1->testGetCcAddresses()
        $this->markTestIncomplete("getCcAddresses test not implemented");
        
        $this->pHPMailer->getCcAddresses(/* parameters */);
    }

    /**
     * Tests PHPMailer->getBccAddresses()
     */
    public function testGetBccAddresses()
    {
        // TODO Auto-generated PHPMailerTest1->testGetBccAddresses()
        $this->markTestIncomplete("getBccAddresses test not implemented");
        
        $this->pHPMailer->getBccAddresses(/* parameters */);
    }

    /**
     * Tests PHPMailer->getReplyToAddresses()
     */
    public function testGetReplyToAddresses()
    {
        // TODO Auto-generated PHPMailerTest1->testGetReplyToAddresses()
        $this->markTestIncomplete("getReplyToAddresses test not implemented");
        
        $this->pHPMailer->getReplyToAddresses(/* parameters */);
    }

    /**
     * Tests PHPMailer->getAllRecipientAddresses()
     */
    public function testGetAllRecipientAddresses()
    {
        // TODO Auto-generated PHPMailerTest1->testGetAllRecipientAddresses()
        $this->markTestIncomplete("getAllRecipientAddresses test not implemented");
        
        $this->pHPMailer->getAllRecipientAddresses(/* parameters */);
    }
}

