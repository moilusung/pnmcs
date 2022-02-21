<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="icon" href="Img/pamdb.png">
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Pampanga Development Bank</title>
<style media="screen">
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
-webkit-appearance: none;
margin: 0;
}
</style>
<style media="screen">

.div1{
  margin-left: auto;
  margin-right:0;
}
.div2{
  margin: 0 auto;
}
.div3{
  text-align: right;
}
#header {
  position: relative;
  /* min-height: 10px; */
}

#header span {
  position: absolute;
  bottom: 0;
}

#outer-div {
  width: 100%;
  background-color: ;
}

#inner-div {
  display: inline-block;
  margin: 20px auto;
  padding: 10px;
  background-color: white;

}
#inner-div h5{
  color:#006400;
  margin-bottom: 30px;
  margin-top: 10px;
  font-family: arial;
}


#inner-div label{
  color: black;
  text-align: center;
  font-family: arial;
  font-size: 12px;
  font-weight: bold;
}

.input-sm {
height: 25px;
padding: 3px 5px;
font-size: 12px;
line-height: 1.5; /* If Placeholder of the input is moved up, rem/modify this. */
border-radius: 3px;
margin-bottom: 3px;
}

.input-middle {
height: 25px;
width: 50px;
padding: 3px 5px;
font-size: 12px;
line-height: 1.5; /* If Placeholder of the input is moved up, rem/modify this. */
border-radius: 3px;
margin-bottom: 3px;
}

.input-submit {
height: 25px;
width: 80px;
padding: 3px 5px;
font-size: 12px;
line-height: 1.5; /* If Placeholder of the input is moved up, rem/modify this. */
border-radius: 3px;
margin-bottom: 3px;
}
.input-select {
height: 25px;
width: 50%;
padding: 3px 5px;
font-size: 12px;
line-height: 1.5; /* If Placeholder of the input is moved up, rem/modify this. */
border-radius: 3px;
margin-bottom: 3px;
}
hr {
  margin-top: 0;
  margin-bottom: 5;
}

h6{
  margin-bottom:0;
  color:#006400;
  font-family: arial;
  font-size: 15px;
}
input {
  font-family: arial;
}
span {
  font-family: arial;
}
</style>

  </head>
  <body>
<form class="" action="" method="post">

    <nav class="navbar navbar-light bg-success">
      <div id='header' class="container-fluid ">
        <a class="navbar-brand" href="#">
              <img src="Img\pdblogo.png" alt="" width="80" height="40"> &nbsp
              <span class="text-light" style="font-family:time-new-roman;font-size:21px;">Pampanga Development Bank</span>
        </a>
      </div>
    </nav>
    <div id='outer-div' class="container" >
          <div id='inner-div' class="container border shadow-lg p-3 mb-5 bg-white rounded">
            <h5 class="text-center" style="">Online Loan Payment Form</h5>
            <div class="row">
                <div class="col-md-5" >
                  <div class="row">
                    <div class="col-md-7 div1">
                      <label for="">Loan Account Number<font class="text-danger">*</font> :</label>
                    </div>
                  </div>
                </div>
                <div class="col-md-5" style="margin-bottom:10px;">
                  <div class="row" style="margin-bottom:0">
                    <div class="col" style="margin-bottom:0">
                      <input style="margin-bottom:0" type="number" placeholder="Loan Account Number" required class="form-control input-sm" name="txtLoanAccountNumber" value="">
                    </div>
                  </div>
                </div>
            </div>
            <div class="row">
              <div class="col-md-8 div2">
                <h6>Name<font class="text-danger">*</font><h6/>
                <hr>
              </div>
            </div>
                <div class="row">
                    <div class="col-md-5">
                      <div class="row">
                        <div class="col-md-7 div1">
                          <label for="">First Name :</label>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-5">
                      <div class="row">
                        <div class="col">
                          <input type="text" placeholder="First Name" required class="form-control input-sm" name="txtFirstName" value="">
                        </div>
                      </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                      <div class="row">
                        <div class="col-md-7 div1">
                          <label for="">Last Name :</label>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-5">
                      <div class="row">
                        <div class="col">
                          <input type="text" placeholder="Last Name" required class="form-control input-sm" name="txtLastName" value="">
                        </div>
                      </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                      <div class="row">
                        <div class="col-md-7 div1">
                          <label for="">Middle Initial :</label>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-5" style="margin-bottom:10px">
                      <div class="row">
                        <div class="col">
                          <input type="text" placeholder="M.I" class="form-control input-middle" name="txtMiddleInitial" value="">
                        </div>
                      </div>
                    </div>
                </div>
                <!--  -->
                <div class="row">
                  <div class="col-md-8 div2">
                    <h6>Address<font class="text-danger">*</font><h6/>
                    <hr>
                  </div>
                </div>
                    <div class="row">
                        <div class="col-md-5">
                          <div class="row">
                            <div class="col-md-7 div1">
                              <label for="">Address Line :</label>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-5">
                          <div class="row">
                            <div class="col">
                                <input type="text" placeholder="House No., Street, Subdivision" class="form-control input-sm" name="txtMobileNumber" value="">
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                          <div class="row">
                            <div class="col-md-7 div1">
                              <label for="">City :</label>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-5" style="margin-bottom:0px">
                          <div class="row">
                            <div class="col">
                            <input type="text" class="form-control input-select" name="txtCity" placeholder="City" >
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                          <div class="row">
                            <div class="col-md-7 div1">
                              <label for="">Province :</label>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-5" style="margin-bottom:0px">
                          <div class="row">
                            <div class="col">
                            <input type="text" class="form-control input-select" name="txtProvince" placeholder="Province" >
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                          <div class="row">
                            <div class="col-md-7 div1">
                              <label for="">Zip/Postal Code :</label>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-5" style="margin-bottom:0px">
                          <div class="row">
                            <div class="col">
                            <input type="text" class="form-control input-select" name="txtZip" placeholder="Zip/Postal Code" >
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                          <div class="row">
                            <div class="col-md-7 div1">
                              <label for="">Country :</label>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-5" style="margin-bottom:10px">
                          <div class="row">
                            <div class="col">
                            <input type="text" class="form-control input-select" readonly name="txtCountry" value="PHILIPPINES"  >
                            </div>
                          </div>
                        </div>
                    </div>

                <!--  -->
                <!--  -->
                <div class="row">
                  <div class="col-md-8 div2">
                    <h6>Others<font class="text-danger">*</font><h6/>
                    <hr>
                  </div>
                </div>
                    <div class="row">
                        <div class="col-md-5">
                          <div class="row">
                            <div class="col-md-7 div1">
                              <label for="">Mobile Number :</label>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-5">
                          <div class="row">
                            <div class="col">
                              <div class="input-group mb-0" style="text-align:bottom">
                                <div class="input-group-prepend">
                                  <span class="input-group-text input-sm txt-secondary">+63</span>
                                </div>
                                <input type="number" placeholder="Mobile Number"
                                          oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                          maxlength="10" required class="form-control input-sm" name="txtMobileNumber" value="">
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                          <div class="row">
                            <div class="col-md-7 div1">
                              <label for="">Branch :</label>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-5" style="margin-bottom:10px">
                          <div class="row">
                            <div class="col">
                            <select class="form-control input-select" name="txtBranch" placeholder="Please Select" required name="">
                              <option></option>
                                <option value="001">San Fernando Branch</option>
                                <option value="002">Angeles Branch</option>
                                <option value="003">Tarlac Branch</option>
                                <option value="004">Cabanatuan Branch</option>
                            </select>
                            </div>
                          </div>
                        </div>
                    </div>

                <!--  -->
                <div class="row">
                  <div class="col-md-8 div2">
                    <h6>Payment Details<font class="text-danger">*</font><h6/>
                    <hr>
                  </div>
                </div>
                    <div class="row">
                        <div class="col-md-5">
                          <div class="row">
                            <div class="col-md-7 div1">
                              <label for="">Payment Amount :</label>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-5">
                          <div class="row">
                            <div class="col"  style="margin:0;">
                              <div class="row">
                                <div class="col" style="margin-bottom:0;margin:auto">
                                    <div class="input-group mb-0" style="text-align:bottom">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text input-sm txt-secondary">Php</span>
                                      </div>
                                      <input  type="number" class="form-control input-sm" name="txtPaymentAmount" required placeholder="Amount" aria-label="">
                                      <div class="input-group-append">
                                        <span class="input-group-text input-sm txt-secondary">.00</span>
                                      </div>
                                    </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col " style="margin:0">
                                    <span class="text-danger " style="font-size:10px;margin:0;font-style:italic">Minimum Amount: PHP100.00</span>
                                  </div>
                              </div>
                            </div>

                          </div>
                        </div>
                    </div>
                <!--  -->
                <div class="row">
                  <hr>
                  <div class="col-md-8 div2">
                  <span class="text-danger" style="font-size:10px;margin:0;font-style:italic">* Required fields</span>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-10 div3">
                    <input type="submit" class="form-control btn btn-success input-submit" name="btnSubmit" value="Proceed">
                  </div>
                </div>
                <!--  -->
          </div>
      </div>

    </form>
  </body>
</html>
