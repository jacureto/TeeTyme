<?php
  include 'http://csis.svsu.edu/~jacureto/cis355/database.php'; // includes file with basic connection information
  //Code framework for delete and update borrowed from object-oriented CRUD files found on Canvas.
  {
    private $id;
    private $fname;
    private $lname;
    private $email;
    private $password_hash;
    private $phone;
    private $address;
    private $city;
    private $state;
    private $zip;
    function __construct($id, $fname, $lname, $email, $password_hash, $phone, $address, $city, $state, $zip)
    {
      $this->id=$id;
      $this->fname=$fname;
      $this->lname=$lname;
      $this->email=$email;
      $this->password_hash=$password_hash;
      $this->phone=$phone;
      $this->address=$address;
      $this->city=$city;
      $this->state=$state;
      $this->zip=$zip;
      
    
    }
  }
    public function createPerson()
    {
      if($this->validate())
      {
        Database::prepare(
          "INSERT INTO tt_persons (fname, lname, email, password_hash, phone, address, city, state, zip) VALUES (?,?,?,?,?,?,?,?,?)",
          array($this->fname, $this->lname, $this->email, $this->password_hash, $this->phone, $this->address, $this->city, $this->state, $this->zip)
                
      );
    
      $this->displayReadScreen();
      } else
        {
        $this->displayCreateScreen();
        }
    }
    
    public function displayReadScreen)()
    {
      $record = Database::prepare
      (
        "SELECT * FROM `tt_persons` WHERE id = ?",
        array(this->id)
      )->fetch(PDO::FETCH_ASSOC);
      echo "
        <div class='container'>
          <div class='span10'>
            <div class='row'>
              <h3>Person</h3>
            </div>
          <div class='form-horizontal'>
            <div class='control-group'>
              <label class='control-label">First Name</label>
              <div class="controls">
                <label class="checkbox">
                  <?php
                    echo $data['name'];
                  ?>
                </label>
              </div>
            </div>
          
          <div class='control-group'>
              <label class='control-label">First Name</label>
              <div class="controls">
                <label class="checkbox">
                  <?php
                    echo $data['fname'];
                  ?>
                </label>
              </div>
            </div>
            
            <div class='control-group'>
              <label class='control-label">Last Name</label>
              <div class="controls">
                <label class="checkbox">
                  <?php
                    echo $data['lname'];
                  ?>
                </label>
              </div>
            </div>
            
            <div class='control-group'>
              <label class='control-label">Email Address</label>
              <div class="controls">
                <label class="checkbox">
                  <?php
                    echo $data['email'];
                  ?>
                </label>
              </div>
            </div>
            
            <div class='control-group'>
              <label class='control-label">Phone Number</label>
              <div class="controls">
                <label class="checkbox">
                  <?php
                    echo $data['phone'];
                  ?>
                </label>
              </div>
            </div>
            
<!--            <div class='control-group'>
              <label class='control-label">Password Hash</label>
              <div class="controls">
                <label class="checkbox">
                  <?php
                    echo $data['password_hash'];
                  ?>
                </label>
              </div>
            </div>
-->            
            <div class='control-group'>
              <label class='control-label">Address</label>
              <div class="controls">
                <label class="checkbox">
                  <?php
                    echo $data['address'];
                  ?>
                </label>
              </div>
            </div>
            
            <div class='control-group'>
              <label class='control-label">City</label>
              <div class="controls">
                <label class="checkbox">
                  <?php
                    echo $data['city'];
                  ?>
                </label>
              </div>
            </div>
            
            <div class='control-group'>
              <label class='control-label">State</label>
              <div class="controls">
                <label class="checkbox">
                  <?php
                    echo $data['state'];
                  ?>
                </label>
              </div>
            </div>
            
            <div class='control-group'>
              <label class='control-label">ZIP Code</label>
              <div class="controls">
                <label class="checkbox">
                  <?php
                    echo $data['zip'];
                  ?>
                </label>
              </div>
            </div>
          </div>
      </body>
      </html>  
          
          " <!-- ends echo -->
}

 // Display a form for updating a record within the database.
        public function displayUpdateScreen() {
            $rec = Database::prepare(
                "SELECT * FROM tt_persons WHERE id = ?", 
                array($this->id)
            )->fetch(PDO::FETCH_ASSOC);
            echo "
                <div class='container'>
                    <div class='span10 offset1'>
                        <div class='row'>
                            <h3>Update Person</h3>
                        </div>
                        <div class='form-horizontal'>
                            <div class='control-group'>
                                <label class='control-label". ((empty($this->nameErr))?'':' error') ."'>name</label>
                                <div class='controls'>
                                    <input id='name' type='text' value='{$rec['name']}' required>
                                    <span class='help-inline'>{$this->nameErr}</span>
                                </div>
                            </div>
                            <div class='control-group'>
                                <label class='control-label". ((empty($this->emailErr))?'':' error') ."'>email</label>
                                <div class='controls'>
                                    <input id='email' type='text' value='{$rec['email']}' required>
                                    <span class='help-inline'>{$this->emailErr}</span>
                                </div>
                            </div>
                            <div class='control-group'>
                                <label class='control-label". ((empty($this->mobileErr))?'':' error') ."'>mobile</label>
                                <div class='controls'>
                                    <input id='mobile' type='text' value='{$rec['mobile']}' required>
                                    <span class='help-inline'>{$this->mobileErr}</span>
                                </div>
                            </div>
                            <div class='form-actions'>
                                <button class='btn btn-success' onclick='personsRequest(\"updateRecord\", {$this->id})'>Update</button>
                                <a class='btn' onclick='personsRequest(\"displayList\")'>Back</a>
                            </div>
                        </div>
                    </div>
                </div>";
        }

public function displayDeleteScreen() 
{
    echo "
        <div class='container'>
            <div class='span10 offset1'>
                <div class='row'>
                    <h3>Delete Person</h3>
                </div>
                <div class='form-horizontal'>
                    <p class='alert alert-error'>Are you sure you want to delete ?</p>
                    <div class='form-actions'>
                        <button id='submit' class='btn btn-danger' onClick='personsRequest(\"deleteRecord\", {$this->id});'>Yes</button>
                        <a class='btn' onclick='personsRequest(\"displayList\")'>Back</a>
                    </div>
                </div>
            </div>
        </div>";
}
        
        // Removes a record from the database.
public function deleteRecord()
{
    Database::prepare
    (
        "DELETE FROM tt_persons WHERE id = ?",
        array($this->id)
    );
    $this->displayReadScreen();
}

public function updateRecord() {
    if ($this->validate()) {
        Database::prepare(
          "UPDATE tt_persons SET name = ?, email = ?, mobile = ?, address = ?, city = ?, state = ?, zip = ?, password_hash = ?, WHERE id = ?",
            array($this->name, $this->email, $this->mobile, $this->address, $this->city, $this->state, $this->zip, $this->password_hash, $this->id)
        );
        $this->displayReadScreen();
    } else {
        $this->displayUpdateScreen();
    }
}

// Validates user input.
        private function validate() {
            $valid = true;
            // Validate Mobile
            if (!preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/", $this->mobile)) {
                $this->mobileErr = "Please enter a valid phone number.";
                $valid = false;
            }
            // Validate Email
            if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
                $this->emailErr = "Please enter a valid email address.";
                $valid = false;
            }
            // Check for empty input.
            if (empty($this->fname)) 
            { 
                $this->nameErr = "Please enter a first name.";
                $valid = false; 
            }
            if (empty($this->lname)) 
            { 
                $this->emailErr = "Please enter a last name.";
                $valid = false; 
            }
            if (empty($this->mobile)) 
            { 
                $this->mobileErr = "Please enter a phone number.";
                $valid = false; 
            }
            <!--if (empty($this->password_hash)) 
            { 
                $this->emailErr = "Please enter a password hash.";
                $valid = false; 
            }-->
            if (empty($this->address)) 
            { 
                $this->emailErr = "Please enter an address.";
                $valid = false; 
            }
            if (empty($this->city)) 
            { 
                $this->emailErr = "Please enter a city.";
                $valid = false; 
            }
            if (empty($this->state)) 
            { 
                $this->emailErr = "Please enter a state.";
                $valid = false; 
            }
            if (empty($this->zip)) 
            { 
                $this->emailErr = "Please enter a ZIP code.";
                $valid = false; 
            }
            
            
            } print_r($valid);
            return $valid;


    
?>    