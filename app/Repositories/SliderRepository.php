<?php

namespace Nobre\Repositories;

use Nobre\Models\Slider;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class SliderRepository
 * @package Nobre\Repositories
 * @version September 6, 2018, 11:58 am UTC
 *
 * @method Slider findWithoutFail($id, $columns = ['*'])
 * @method Slider find($id, $columns = ['*'])
 * @method Slider first($columns = ['*'])
*/
class SliderRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Slider::class;
    }
}
