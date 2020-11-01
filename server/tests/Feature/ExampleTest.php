<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $nums = [2,7,11,15];
        $target = 9;
        $result = $this->twoSum2($nums, $target);

        $this->assertEquals($result, [0,1]);
    }

    function twoSum($nums, $target) {

        asort($nums);
        $i = 0;
        $int = count($nums);
        foreach ($nums as $num) {
            for ($n = $i + 1 ;$n < $int ;$n++) {
                if ($nums[$i] + $nums[$n] === $target) {
                    return $answer = array($i, $n);
                }
            }
            unset($nums[$i]);
            $i++;
        }
    }

    function twoSum2($nums ,$target) {
        $tempArray = array();
        foreach($nums as $key=>$num){
            if(isset($tempArray[$target - $num])){
                return [$tempArray[$target - $num], $key];
            }
            $tempArray[$num] = $key;
        }
    }
}
