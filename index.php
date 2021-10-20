<?php session_start(); /* Starts the session */
if(!isset($_SESSION['UserData']['Username'])){
header("location:login.php");
exit;
}
?>



<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script type="text/javascript" src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
  <script src="accordion.js" type="text/javascript"></script>
  <link rel="stylesheet" href="bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>KnowledgeBase</title>
  <link rel="icon" href="img/search-icon.png" type="image/icon type">
</head>

<body>
  <div id="logout">
    <a href="logout.php"><img src="img/exit.png" alt="EXIT" width="47" height="47" /></a>
  </div>

  <br>
  <div class="">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal" id="buttonspace">
      CRM Queues
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Queue TAX Support</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body text-md-left">
            General &rarr; <b>QTS US</b>: Fully responsible for taking phone calls.<br><br>
            Bank &rarr; <b>QTS Bank US</b>: Support request responses from Dev team for customers having less than 1000 bank products will be transferred here. <br><br>
            Conversion &rarr; <b>QTS Conversion IND Cust.</b>: Support requests from US customers concerning conversion. <br><br>
            Printing &rarr; <b>QTS Printing IND Customer</b>: Support requests from US customers concerning printing. <br><br>
            Tax Content &rarr; <b>QTS TaxContent IND Cust.</b>: Support requests from US customers to be handled Indian team , email answering in and out. <br><br>
            Software &rarr; <b>QTS TaxApp IND Cust.</b>: Support requests from US customers concerning software to be handled Indian team, email answering in and out. <br><br>
            Software &rarr; <b>QTS Verify English</b>: After resolving customers' tickets, Indian team assigns replies to this queue so that it can be verified for proper English format. <br><br>
            Suggestions, Requests, & Recommendations &rarr; <b>QTS Ideas </b>: Customer suggestions, requests, and recommendations for new/improve features in the software.

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

          </div>
        </div>
      </div>
    </div>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2" id="buttonspace">
      Happy Buttons
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Happy Buttons</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body text-md-left">
          ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

          </div>
        </div>
      </div>
    </div>
  </div>
  <input type="text" placeholder="Keyword Search" name="search" id="search" data-type="accordion-search" class="searchbar">
  <br>
  <p class="inline">Category</p>
  <select name="filter" id="filter" class="filtercatergories" data-type="accordion-filter">
    <option value="default">All</option>
    <option value="Licenses">Licenses</option>
    <option value="Setup">Setup</option>
    <option value="Software">Software</option>
    <option value="TaxTerms">Tax Terms</option>
  </select>
  <br>
  <br>
  <br>
  <div class="Container-main">
    <section id="accordion">
      <div data-type="accordion-section" data-filter="Licenses">
        <center class="centertext">
          Licenses
        </center>
        <p data-type="accordion-section-title">License Types</p>
        <div class="accordion-content" data-type="accordion-section-body">
          <div class="container">
            <div class="row">
              <div class="col">
                <b>Individual Pro</b><br />
                Unlimited Tax Preparation<br />
                Free Unlimited E-filing<br />
                Federal and All States Included<br />
                Integrated Bank Products<br />
                Client Portal<br />
                Signature Pad App<br /><br />
                <u>INDIVIDUAL RETURNS ONLY</u><br />
                Individual (1040)<br /><br />
                Single User Account<br />
                5 GB of Storage
              </div>
              <div class="col">
                <b>Essential</b><br />
                Unlimited Tax Preparation<br />
                Free Unlimited E-filing<br />
                Federal and All States Included<br />
                Integrated Bank Products<br />
                Client Portal<br />
                Signature Pad App<br /><br />
                <u>INDIVIDUAL AND BUSINESS</u><br />
                Business & Specialty Modules<br />
                1065, 1120, 1120S, 1041, 990, 706, 709<br />
                After-the-Fact Payroll<br /><br />
                Two User Accounts<br />
                10 GB Storage
              </div>
              <div class="col">
                <b>Unlimited </b><br />
                Unlimited Tax Preparation<br />
                Free Unlimited E-filing<br />
                Federal and All States Included<br />
                Integrated Bank Products<br />
                Client Portal<br />
                Signature Pad App<br /><br />
                <u>INDIVIDUAL AND BUSINESS</u><br />
                Business & Specialty Modules<br />
                1065, 1120, 1120S, 1041, 990, 706, 709<br />
                After-the-Fact Payroll<br /><br />
                Multi-Office Management<br />
                Unlimited User Accounts<br />
                Unlimited Storage
              </div>
            </div>
          </div>
        </div>
      </div>
      <div data-type="accordion-section" data-filter="TaxTerms">
        <center class="centertext">
          Tax Terms
        </center>
        <p data-type="accordion-section-title">ACTC = Additional Child Tax Credit &rarr;<font class="locationfont"> Deductions/Credits - Form 8812</font>
        </p>
        <div class="accordion-content" data-type="accordion-section-body">Worth up to $1,400 for each qualifying child.</div>
      </div>
      <div data-type="accordion-section" data-filter="TaxTerms">
        <p data-type="accordion-section-title">AGI = Adjusted Gross Income &rarr;<font class="locationfont"> Federal - Form 1040 line 11</font>
        </p>
        <div class="accordion-content" data-type="accordion-section-body">Gross income minus allowable reductions</div>
      </div>
      <div data-type="accordion-section" data-filter="TaxTerms">
        <p data-type="accordion-section-title">AMT = Alternative Minimum Tax &rarr;<font class="locationfont"> Tax & Payments - Form 6251</font>
        </p>
        <div class="accordion-content" data-type="accordion-section-body">Designed to collect at least a minumum amount of tax from taxpayers who benefit from the tax laws that give special treatment to certain kinds of income and allow deductions
          and credits for certain kinds of expenses.</div>
      </div>
      <div data-type="accordion-section" data-filter="TaxTerms">
        <p data-type="accordion-section-title">AOTC = American Opportunity Tax Credit &rarr;<font class="locationfont"> Deductions/Credits - Form 8863(2)</font>
        </p>
        <div class="accordion-content" data-type="accordion-section-body">For qualified education expenses paid for an eligible student for the first four years of higher education.</div>
      </div>
      <div data-type="accordion-section" data-filter="TaxTerms">
        <p data-type="accordion-section-title">Charitable Contributions &rarr;<font class="locationfont"> Deductions/Credits - Schedule A</font>
        </p>
        <div class="accordion-content" data-type="accordion-section-body">Is a type of itemized deduction. Can earn you an itemized tax deduction when you donate to a qualifying non-profit organization, charity, or private foundation.</div>
      </div>
      <div data-type="accordion-section" data-filter="TaxTerms">
        <p data-type="accordion-section-title">CTC = Child Tax Credit &rarr;<font class="locationfont"> Deductions/Credits - Form 1040 CTC</font>
        </p>
        <div class="accordion-content" data-type="accordion-section-body">A tax credit available to people with Children under the age of seventeen. </div>
      </div>
      <div data-type="accordion-section" data-filter="TaxTerms">
        <p data-type="accordion-section-title">Deductions</p>
        <div class="accordion-content" data-type="accordion-section-body">Are items or expenses subtracted from your income to reduce the amount of income that is subject to being taxed.</div>
      </div>
      <div data-type="accordion-section" data-filter="TaxTerms">
        <p data-type="accordion-section-title">EIC = Earned Income Credit &rarr;<font class="locationfont"> Deductions/Credits - Form 1040 EIC</font>
        </p>
        <div class="accordion-content" data-type="accordion-section-body">A tax credit allowed to employed individuals whose income and modified gross income is less than a certain amount.</div>
      </div>
      <div data-type="accordion-section" data-filter="TaxTerms">
        <p data-type="accordion-section-title">EIN = Employer Identification Number &rarr;<font class="locationfont"> Toolbox - Firm Setup - User</font>
        </p>
        <div class="accordion-content" data-type="accordion-section-body">Nine-digit number assigned by the IRS in the following format XX-XXXXXXX.</div>
      </div>
      <div data-type="accordion-section" data-filter="TaxTerms">
        <p data-type="accordion-section-title">EFIN = Electronic Filer Identification Number &rarr;<font class="locationfont"> Toolbox - Firm Setup - EFIN</font>
        </p>
        <div class="accordion-content" data-type="accordion-section-body">6 Digit Number issued by the IRS to individuals or firms that have been approved as Authorized IRS e-file providers.</div>
      </div>
      <div data-type="accordion-section" data-filter="TaxTerms">
        <p data-type="accordion-section-title">EA = Enrolled Agent</p>
        <div class="accordion-content" data-type="accordion-section-body">A tax preparer who, virtue of passing a tough IRS test or prior IRS work experience, can represent clients at IRS audits and appeals.</div>
      </div>
      <div data-type="accordion-section" data-filter="TaxTerms">
        <p data-type="accordion-section-title">ERO = Electronic Return Originator &rarr;<font class="locationfont"> Toolbox - Firm Setup - User</font>
        </p>
        <div class="accordion-content" data-type="accordion-section-body">Person or business that originates federal income tax returns electronically for the Internal Revenue Service. With approval and appropriate software.</div>
      </div>
      <div data-type="accordion-section" data-filter="TaxTerms">
        <p data-type="accordion-section-title">Filing Status &rarr;<font class="locationfont"> Federal - Client Information Sheet</font>
        </p>
        <div class="accordion-content" data-type="accordion-section-body">Taxpayer categories that determine the amount of tax and /or tax credits that apply to different taxpayers. 5 filing status: Single, Married filing jointly, Married filing
          separately, Head of Household, Qualifying widow(er) with dependent child</div>
      </div>
      <div data-type="accordion-section" data-filter="TaxTerms">
        <p data-type="accordion-section-title">Gross Income &rarr;<font class="locationfont"> Federal - Form 1040 Line 9</font>
        </p>
        <div class="accordion-content" data-type="accordion-section-body">Taxpayer categories that determine the amount of tax and /or tax credits that apply to different taxpayers.</div>
      </div>
      <div data-type="accordion-section" data-filter="TaxTerms">
        <p data-type="accordion-section-title">HOH = Head Of Household &rarr;<font class="locationfont"> Federal - Client Information Sheet - 4th Filing Status</font>
        </p>
        <div class="accordion-content" data-type="accordion-section-body">A filing status used by an unmarried taxpayer who pays over half of the cost of maintaining the home of a qualified individual.</div>
      </div>
      <div data-type="accordion-section" data-filter="TaxTerms">
        <p data-type="accordion-section-title">HSA = Health Savings Account &rarr;<font class="locationfont"> Adjustments - Form 8889</font>
        </p>
        <div class="accordion-content" data-type="accordion-section-body">Tax-exempt account that you set up with a trustee, such as a bank or insurance company, to pay or reimburse certain medical expenses you incur.</div>
      </div>
      <div data-type="accordion-section" data-filter="TaxTerms">
        <p data-type="accordion-section-title">IRS = Internal Revenue Service</p>
        <div class="accordion-content" data-type="accordion-section-body">The Treasury Department division responsible for collecting taxes.</div>
      </div>
      <div data-type="accordion-section" data-filter="TaxTerms">
        <p data-type="accordion-section-title">IRA = Individual Retirement Account &rarr;<font class="locationfont"> Adjustments - Form 1040 IRA</font>
        </p>
        <div class="accordion-content" data-type="accordion-section-body">A tax-sheltered savings plan set up by the taxpayer, generally for retirement income.</div>
      </div>
      <div data-type="accordion-section" data-filter="TaxTerms">
        <p data-type="accordion-section-title">MFJ = Married Filing Jointly &rarr;<font class="locationfont"> Federal - Client Information Sheet - 2nd Filing Status</font>
        </p>
        <div class="accordion-content" data-type="accordion-section-body">A filing status used by a couple that is married at the end of the year and uses one tax return.</div>
      </div>
      <div data-type="accordion-section" data-filter="TaxTerms">
        <p data-type="accordion-section-title">MFS = Married Filing Separately &rarr;<font class="locationfont"> Federal - Client Information Sheet - 3rd Filing Status </font>
        </p>
        <div class="accordion-content" data-type="accordion-section-body">The filing status used by a couple that is married at the end of the year and chooses to file separate tax returns.</div>
      </div>
      <div data-type="accordion-section" data-filter="TaxTerms">
        <p data-type="accordion-section-title">ODC = Other Dependent Credit &rarr;<font class="locationfont"> Deductions/Credits - Form 1040 CTC </font>
        </p>
        <div class="accordion-content" data-type="accordion-section-body">Non-refundable tax credit of up to $500 per qualifying person. For each eligible dependent, who cannot be claimed for the child tax credit.</div>
      </div>
      <div data-type="accordion-section" data-filter="TaxTerms">
        <p data-type="accordion-section-title">PTIN = Practiioner Tax Identification Number &rarr;<font class="locationfont"> Toolbox - Firm Setup - User </font>
        </p>
        <div class="accordion-content" data-type="accordion-section-body">Identification number issues by the IRS to a professional tax preparer.</div>
      </div>
      <div data-type="accordion-section" data-filter="TaxTerms">
        <p data-type="accordion-section-title">Qualifying Widower &rarr;<font class="locationfont"> Federal - Client Information Sheet - 5th Filing Status </font>
        </p>
        <div class="accordion-content" data-type="accordion-section-body">Status that allows you to retain the benefits of a MFJ status for 2 years after the year of your spouse’s death. Must have a dependent child to file with this status.</div>
      </div>
      <div data-type="accordion-section" data-filter="TaxTerms">
        <p data-type="accordion-section-title">STIN = State Tax Identification Number &rarr;<font class="locationfont"> Toolbox - Firm Setup - User</font>
        </p>
        <div class="accordion-content" data-type="accordion-section-body">Serves as a reference for your business tax licenses, liabilities, and credits. Mostly used by VITA sites.</div>
      </div>
      <div data-type="accordion-section" data-filter="TaxTerms">
        <p data-type="accordion-section-title">Taxable Income &rarr;<font class="locationfont"> Federal - Form 1040 Line 15</font>
        </p>
        <div class="accordion-content" data-type="accordion-section-body">Determines your tax liability before tax credits.</div>
      </div>
      <div data-type="accordion-section" data-filter="TaxTerms">
        <p data-type="accordion-section-title">Withholding</p>
        <div class="accordion-content" data-type="accordion-section-body">Portion of your paycheck that your employer sends directly to the government each pay period as partial payment of your income tax.</div>
      </div>
      <div data-type="accordion-section" data-filter="Setup">
        <center class="centertext">
          Setup
        </center>
        <p data-type="accordion-section-title">Upload EFIN/PTIN Application Summary/Letter - If Customer failed the EFIN Verification process during Firm Setup.</p>
        <div class="accordion-content" data-type="accordion-section-body">
          Ask the customer:<b>"When was the last time you have logged into your E-Services account?"</b> <br>If customer has not logged since 2018 &#129106; Reset/Re-setup E-Services account for the 2 factors verification..<br>To Upload &#129106; EFIN/PTIN Application Summary/Letter cannot be older than 1 year. <br /><br>
                 1. https://www.irs.gov/ &#129106; Right upper corner: <img src="img/taxpros.png" alt="Tax Pros" width="" height="" /><br>
          <br /> If customer received <u>PTIN letter</u> & wants to renew his PTIN for the next year &#129106; <img src="img/ptin.png" alt="PTIN System Renew or Register" width="" height="" /><br>
          <br /> 2. If customer received EFIN letter &#129106; <img src="img/accesseservices.png" alt="Access E-Services" width="" height="" /><br>
          <br /> 3. Scroll down &#129106; <img src="img/efileproviderservices.png" alt="E-file Provider Services" width="" height="" /> &#129106; <img src="img/accessefileapplication.png" alt="Acess e-file Application" width="" height="" /><br>
          <br /> If customer does not have an e-services account &#129106; <img src="img/singup.png" alt="Sign Up" width="" height="" /><br>
          <br /> 4. If customer has login credentials, enter Username & click log in &#129106; <img src="img/login.png" alt="Log In" width="" height="" /><br>
          <br /> 5. Enter password & click submit &#129106; <img src="img/password.png" alt="Password" width="" height="" /><br>
          <br /> 6. 6-digit security code will be sent to customer's phone.<br />
          Enter 6-digit security code & click continue &#129106; <img src="img/6digitcode.png" alt="6 Digit Code" width="" height="" /><br>
          <br /> 7. Online Security Information, click continue &#129106; <img src="img/onlinesecurityinfo.png" alt="Online Security Information" width="" height="" /><br>
          <br /> 8. Select organization/name with the word eFile & click submit &#129106; <img src="img/selectorganization.png" alt="Select Organization" width="" height="" /><br>
          If eFile beside the organization/name is missing then go through each organization/name to find where the EFIN is located.<br />
          <br /> 9. Click on View/Edit to see the EFIN Application Summary: <img src="img/viewedit.png" alt="View/Edit" width="" height="" /><br>
          <br /> 10. Verify on page 1 the business name, address and authorized user(s). Make sure on page 2 the EFIN number is showing active: <img src="img/activeefin.png" alt="EFIN Number Active" width="" height="" /><br> If EFIN number is showing <b>inactive</b>, customer needs to contact IRS. <br>
          <br /> 11. On page 1 click on Print and save as a PDF copy to the computer &#129106; <img src="img/print.png" alt="Print" width="" height="" /><br>
          <br /> 12. Upload EFIN Application Summary:<br> Toolbox &#129106; Firm Setup &#129106; <img src="img/notreadyforefilingedit.png" alt="Not Ready For Efiling Edit Button" width="" height="" /> &#129106; Click Pencil.<br>
          Click on Verify <img src="img/efinverify.png" alt="Verify" width="" height="" />  <br>
          Drop or Click to upload the EFIN Application Summary  &#129106; <img src="img/dropclickupload.png" alt="Drop Or Upload" width="" height="" /> &#129106; Click Save.<br>Approval can take about 24 hours.
        </div>
      </div>
      <div data-type="accordion-section" data-filter="Software">
        <center class="centertext">
          Software
        </center>
        <p data-type="accordion-section-title">Not Able To E-file/EFIN Not Verified </p>
        <div class="accordion-content" data-type="accordion-section-body">CRM-Check Customer's <u>EFIN Status</u> and <u>EFIN Verification</u>: <br> Customer Card &rarr; Offices &rarr; <img src="img/efinstatus.png" alt="EFIN Status" width=""
            height="" /><br> <br>
          EFIN Status: <u>Complete</u> &rarr; Customer needs to refresh software/app. <br>
          EFIN Status: <u>Pending</u> &rarr; Reach out to your Tier 2 Agent.</div>
      </div>
    </section>
  </div>
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  <script>
    $(document).ready(function() {
      $("#accordion").accordion();
    });
  </script>

</body>

</html>
