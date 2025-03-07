<?php

namespace App\Interfaces;

interface PegawaiRepositoryInterface
{
    public function all();
    public function find($id);
    public function search($keyword);
    public function create(array $data);
    public function update($id, array $data);
    public function delete($id);
    public function getCreateData();
    public function getEditData($id);
}