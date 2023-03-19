<?php

class Parameters_Manager
{

	public static function add(Parameters $obj)
	{
		return DAO::add($obj);
	}

	public static function update(Parameters $obj)
	{
		return DAO::update($obj);
	}

	public static function delete(Parameters $obj)
	{
		return DAO::delete($obj);
	}

	public static function findById($id)
	{
		return DAO::select(Parameters::getAttributes(), "Parameters", ["IdPanier" => $id])[0];
	}

	public static function getList(array $nomColonnes = null,  array $conditions = null, string $orderBy = null, string $limit = null, bool $api = false, bool $debug = false)
	{
		$nomColonnes = ($nomColonnes == null) ? Parameters::getAttributes() : $nomColonnes;
		return DAO::select($nomColonnes, "Parameters",   $conditions,  $orderBy,  $limit,  $api,  $debug);
	}
	public static function createTable($obj)
	{
		return DAO::createTable($obj);
	}
	public static function dropTable($obj)
	{
		return DAO::dropTable($obj);
	}
	public static function getInfo($obj)
	{
		return DAO::getInfo($obj);
	}
}