<?php

class Games_model extends CI_model
{
	public function index()
	{
		$this->db->order_by("name", "ASC");
		return $this->db->get("tb_games")->result_array();
	}

	public function dashboard_index()
	{
		$this->db->order_by("id", "DESC");
		$this->db->limit(5);
		return $this->db->get("tb_games")->result_array();
	}

	public function store($game)
	{
		$this->db->insert("tb_games", $game);
	}

	public function show($id)
	{
		return $this->db->get_where("tb_games", array(
			"id" => $id
		))->row_array();
	}

	public function update($id, $game)
	{
		$this->db->where("id", $id);
		return $this->db->update("tb_games", $game);
	}

	public function destroy($id)
	{
		$this->db->where("id", $id);
		return $this->db->delete("tb_games");
	}

	public function mygames_index()
	{
		$this->db->where("user_id", $_SESSION["logged_user"]["id"]);
		$this->db->order_by("id", "DESC");
		return $this->db->get("tb_games")->result_array();
	}

	public function gamesPerCategory()
	{
		$this->db->select('category, COUNT(*) as count');
		$this->db->group_by('category');
		return $this->db->get('tb_games')->result_array();
	}

	public function categories_index()
	{
		$this->db->order_by("category", "ASC");
		return $this->db->get("tb_category_games")->result_array();
	}

	public function inserirCategoria($categoryName)
	{
		$this->db->set('category', $categoryName);
		$this->db->insert('tb_category_games');
	}
}
