 <?php
  include"config/connection.php";

                        if(isset($_POST['send_message_now']))
                        {
                            $Sender = $_POST['Sender'];
                            $Email = $_POST['Email'];
                            $Message = $_POST['Message'];   
                            
                            if(empty($Sender)||empty($Email)||empty($Message))
                            {
                                echo "<script>alert('Please fill the Messageages area.')</script>";
                                echo "<script>location.href='index?about'</script>";
                                
                            }
                         else
                            {

                                $sql="INSERT INTO suggestion(`Sender`, `Email`,`Message`)
                                VALUE('$Sender','$Email','$Message')";

                             if ($conn->query($sql)==TRUE) {
                                echo "<script>alert('Thanks $Sender your message have succesfull Sent.')</script>";
                                echo "<script>location.href='index.php'</script>";

                                }else{

                                echo "<script>alert('Sorry something went wrong , Try again.')</script>";
                                echo "<script>location.href='index.php'</script>";
                                }
                            }
                        }
                        
                    ?>
