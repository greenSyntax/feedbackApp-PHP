		<?php

		require_once('public/include/config.php');

		class DbManager{

			//Private Fields
			private $conn;

			//Constructor
			function __construct(){

				require_once('DbConnect.php');
				
				$db = new DbConnect();
				$this->conn = $db->connect();
			}

			//Delete Feedback
			function deleteFeedback($id){

				//Validate whether {id} exist or not.
				$sql = "SELECT * FROM ".TBL_FEEDBACK." WHERE feedback_id =".$id;
				$result = $this->conn->query($sql);
				if($result->num_rows != 1){

					return "NO_SUCH_ID";
				}

				//Delete Id
				$sql = "DELETE FROM ".TBL_FEEDBACK." WHERE feedback_id =".$id;

				$result = $this->conn->query($sql);
				if($result === true){

					return "Deleted Successfully";
				}
				else{
					
					return "ERROR";
				}

				$this->conn->close();
			}

			//Update Feedback
			function updateFeedback($id, $status){

				//Validate whether {id} exist or not.
				$sql = "SELECT * FROM ".TBL_FEEDBACK." WHERE feedback_id =".$id;
				$result = $this->conn->query($sql);
				if($result->num_rows != 1){

					return "NO_SUCH_ID";
				}

				//Update Feedback Status
				$sql = "UPDATE ".TBL_FEEDBACK." SET processing_status ='".$status."' WHERE feedback_id=".$id;

				$result = $this->conn->query($sql);

				if($result === true){

					return "Updated Successfully";
				}
				else{

					return "Error";
				}

				$this->conn->close();
			}

			//Insert Feedback
			function insertData($user_name, $feedback_text, $user_mail){

				if($this->conn){

				$time_stamp = date("Y-m-d h:i:s");

				$sql = "INSERT INTO `".TBL_FEEDBACK."` (`feedback_id`, `user_name`, `feedback_text`, `user_mail`, `time_stamp`, `processing_status`) VALUES (NULL, '".$user_name."', '".$feedback_text."', '".$user_mail."', '".$time_stamp."',0)";

				$result = $this->conn->query($sql);

				if($result === true){

					return "Inserted Successfully.";
				}
				else{

					return "Failed while insterting data.";
				}
				}

				$this->conn->close();
			}

			//Select By id
			function selectByid($id){

				if($this->conn){

					$sql = "SELECT * FROM ".TBL_FEEDBACK." WHERE feedback_id='".$id."'";
					$result = $this->conn->query($sql);

					if($result->num_rows == 1){

						$row = $result->fetch_assoc();
						return $row;
					}
				}

				$this->conn->close();
			}

			//Selct By Email id
			function selectByEmail($email){

				if($this->conn){

					$sql = "SELECT * FROM ".TBL_FEEDBACK." WHERE user_mail='$email'";
					
					$result = $this->conn->query($sql);

					if($result->num_rows > 0){

						while ($row = $result->fetch_assoc()) {
							
							return $row;
						}
					}
				}

				$this->conn->close();
			}
			
			//Select All Data
			function selectAll(){

				if($this->conn){

					$sql = "SELECT * FROM ".TBL_FEEDBACK;
					$result = $this->conn->query($sql);

					if($result->num_rows > 0){

						while($row = $result->fetch_assoc()){

							$data[]= $row;
						}
					}
					
				}

				$this->conn->close();

				$response = ($data != NULL ? $data : "");
				return $response;
			}
		}

		?>