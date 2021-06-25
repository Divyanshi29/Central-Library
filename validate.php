<?php

if($row)
                    { ?>
                        <script type="text/javascript">
                            document.getElementById('error3').innerHTML="Already Exit Email Address";
                            error3.style.padding = "20px";
                            error3.style.color = "red";
                            error3.style.background="blue";
                            error3.style.border = "1px solid red";
                        </script>
                    <?php 
                    }
                    else
                    { 
                        if($password!=$cpassword){
                            ?>
                            <script type="text/javascript">
                            document.getElementById('error3').innerHTML="Confirm Password Not Match!";
                            error3.style.padding = "20px";
                            error3.style.color = "red";
                            error3.style.background="blue";
                            error3.style.border = "1px solid red";
                            </script>
                }

