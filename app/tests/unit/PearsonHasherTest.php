<?php


namespace Tests\unit;


use PHPUnit\Framework\TestCase;
use TKuni\PhpPearsonHashing\PearsonHasher;

class PearsonHasherTest extends TestCase
{
    /**
     * @test
     */
    public function shouldReturnValidValueAsHexStringIfInputShortText()
    {
        $hasher = new PearsonHasher();
        $actual = $hasher->hash(2, 'ni hao');
        $this->assertEquals("1297", $actual);
    }

    /**
     * @test
     */
    public function shouldReturnValidValueAsBinaryStringIfInputShortText()
    {
        $hasher = new PearsonHasher();
        $actual = $hasher->hash(2, 'ni hao', true);
        $this->assertEquals("\x12\x97", $actual);
    }

    /**
     * @test
     */
    public function shouldReturn4byteValidValueAsHexStringIfInputLongText()
    {
        $hasher = new PearsonHasher();
        $actual = $hasher->hash(4, 'I can accept failure, everyone fails at something. But I can\'t accept not trying.');
        $this->assertEquals("db6ffd3c", $actual);
    }

    /**
     * @test
     */
    public function shouldReturn8byteValidValueAsHexStringIfInputLongText()
    {
        $hasher = new PearsonHasher();
        $actual = $hasher->hash(8, 'I can accept failure, everyone fails at something. But I can\'t accept not trying.');
        $this->assertEquals("db6ffd3c9b309ab3", $actual);
    }

    /**
     * @test
     */
    public function shouldReturnValidValueAsHexStringIfInputTooShortText()
    {
        $hasher = new PearsonHasher();
        $actual = $hasher->hash(16, 'a');
        $this->assertEquals("b81eb7796342e56b9751049981944f75", $actual);
    }

    /**
     * @test
     */
    public function shouldReturnValidValueAsHexStringIfInputSymbols()
    {
        $hasher = new PearsonHasher();
        $actual = $hasher->hash(8, '!"#$%&\'()=~|`{*}?_`1234567890-^\@[:]/\\');
        $this->assertEquals("63de171ac48efeb6", $actual);
    }

    /**
     * @test
     */
    public function shouldReturnValidValueAsHexStringIfInputJapanese()
    {
        $hasher = new PearsonHasher();
        $message = <<<EOM
吾輩わがはいは猫である。名前はまだ無い。
どこで生れたかとんと見当けんとうがつかぬ。何でも薄暗いじめじめした所でニャーニャー泣いていた事だけは記憶している。
EOM;
        $actual = $hasher->hash(8, $message);
        $this->assertEquals("62b1052443c35d15", $actual);
    }
}