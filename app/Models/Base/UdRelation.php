<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 14 Jan 2020 23:25:30 +0000.
 */

namespace App\Models\Base;

use Tightenco\Collect\Support\Collection;

/**
 * Class UdRelation
 * 
 * @property int $idUDRelation
 * @property string $info
 * @property int $idTypeInstance
 * @property int $idEntity
 * 
 * @property \App\Models\Entity $entity
 * @property \App\Models\TypeInstance $typeInstance
 *
 * @package App\Models\Base
 */

class UdRelation extends \MBusinessModel
{
	public int $idUDRelation; 
	public string $info = '';
	public int $idTypeInstance; 
	public int $idEntity; 
	public \App\Models\Entity $entity; 
	public \App\Models\TypeInstance $typeInstance; 

	public function entity()
	{
		return $this->entity ?: $this->retrieveAssociation('entity'); 
	}

	public function typeInstance()
	{
		return $this->typeInstance ?: $this->retrieveAssociation('typeInstance'); 
	}
}
