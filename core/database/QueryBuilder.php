<?php

class  QueryBuilder
{
	protected $pdo;

	function __construct($pdo)
	{
		$this->pdo = $pdo;
	}

	public function insert($table, $parameters)
	{
		$sql = sprintf(
			'insert into %s (%s) values (%s)',
			$table,
			implode(', ', array_keys($parameters)),
			':' . implode(', :', array_keys($parameters))
		);

		try {
			$statement = $this->pdo->prepare($sql);

			$statement->execute($parameters);
		} catch (Exception $e) {
			die('Woops, something went wrong.');
		}
	}

	public function search($table, $search)
	{
		$sql = "
      SELECT first_name, last_name, records_number, date_of_birth
      FROM {$table}
      WHERE first_name LIKE :search";
    try {
      $statement = $this->pdo->prepare($sql);
      $statement->bindValue(':search', '%'.$search.'%', PDO::PARAM_STR);
      $statement->execute();

      return $statement->fetchAll(PDO::FETCH_CLASS);
    } catch (Exception $e) {
			die('Whoops, something went wrong.');
		}
	}
}