<?php

class Fila
{
	protected $fila = [];

	/**
	* Insere um inteiro na pilha
	* @param integer $value
	* @return $this
	*/
	public function push($value)
	{
		if (false === is_int($value)) {
			throw new Exception('O valor passado deve ser um inteiro.', 1);
		}

		array_push($this->fila, $value);
		return $this;
	}

	/**
	* Retira um inteiro da pilha
	* @return $this
	*/
	public function pop()
	{
		array_pop($this->fila);
		return $this;
	}

	/**
	* Retorna o menor inteiro da pilha
	* @return integer
	*/
	public function min()
	{
		return min($this->fila);
	}
}