<?php

class User
{
   private $iduser;
   private $deslogin;
   private $despassword;
   private $dtregister;

   // ID
   public function getIduser()
   {
      return $this->iduser;
   }

   public function setIduser($value)
   {
      $this->iduser = $value;
   }

   // LOGIN
   public function getDeslogin()
   {
      return $this->deslogin;
   }

   public function setDeslogin($value)
   {
      $this->deslogin = $value;
   }

   // PASSWORD
   public function getDespassword()
   {
      return $this->despassword;
   }

   public function setDespassword($value)
   {
      $this->despassword = $value;
   }

   // REGISTER
   public function getDtregister()
   {
      return $this->dtregister;
   }

   public function setDtregister($value)
   {
      $this->dtregister = $value;
   }

   // LIST FOR ID
   public function loadById($id)
   {
      $sql = new Sql();

      $results = $sql->select("SELECT * FROM tb_users WHERE iduser = :ID", array(
         ":ID" => $id
      ));

      // if(count($results) > 0) {
      if (isset($results[0])) {

         $this->setData($results[0]);
      }
   }

   // FOR AUTHENTICATION
   public function login($login, $password)
   {
      $sql = new Sql();

      $results = $sql->select("SELECT * FROM tb_users WHERE deslogin = :LOGIN AND despassword = :PASSWORD", array(
         ":LOGIN" => $login,
         ":PASSWORD" => $password
      ));

      if (count($results) > 0) {

         $this->setData($results[0]);
      } else {
         throw new Exception("Login e/ou senha invalidos");
      }
   }

   // LIST ALL
   public static function getList()
   {
      $sql = new Sql();

      return $sql->select("SELECT * FROM tb_users ORDER BY deslogin;");
   }

   // FOR SEARCH
   public static function search($login)
   {
      $sql = new Sql();

      return $sql->select("SELECT * FROM tb_users WHERE deslogin LIKE :SEARCH ORDER BY deslogin", array(
         ':SEARCH' => "%$login%"
      ));
   }

   public function setData($data)
   {
      $this->setIduser($data['iduser']);
      $this->setDeslogin($data['deslogin']);
      $this->setDespassword($data['despassword']);
      $this->setDtregister(new DateTime($data['dtregister']));
   }

   //INSERT
   public function insert()
   {
      $sql = new Sql();

      $results = $sql->select("CALL sp_users_insert(:LOGIN, :PASSWORD)", array(
         ':LOGIN' => $this->getDeslogin(),
         ':PASSWORD' => $this->getDespassword()
      ));

      if (count($results) > 0) {
         $this->setData($results[0]);
      }
   }

   //UPDATE
   public function update($login, $password)
   {
      $this->setDeslogin($login);
      $this->setDespassword($password);

      $sql = new Sql();

      $sql->executeQuery("UPDATE tb_users SET deslogin = :LOGIN, despassword = :PASSWORD WHERE iduser = :ID", array(
         ':LOGIN' => $this->getDeslogin(),
         ':PASSWORD' => $this->getDespassword(),
         ':ID' => $this->getIduser()
      ));
   }

   //DELETE
   public function delete()
   {
      $sql = new Sql();

      $sql->executeQuery("DELETE FROM tb_users WHERE iduser = :ID", array(
         ':ID' => $this->getIduser()
      ));

      $this->setIduser(0);
      $this->setDeslogin("");
      $this->setDespassword("");
      $this->setDtregister(new DateTime());
   }

   public function __construct($login = "", $password = "")
   {
      $this->setDeslogin($login);
      $this->setDespassword($password);
   }

   public function __toString()
   {
      $date = $this->getDtregister();
      $formattedDate = $date ? $date->format("d/m/Y H:i:s") : 'No date available';

      return json_encode(array(
         "iduser" => $this->getIduser(),
         "deslogin" => $this->getDeslogin(),
         "despassword" => $this->getDespassword(),
         "dtregister" => $formattedDate
      ));
   }
}
