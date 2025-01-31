<?php
// automatically generated by the FlatBuffers compiler, do not modify

declare(strict_types=1);

use \Google\FlatBuffers\Constants;
use \Google\FlatBuffers\Struct;
use \Google\FlatBuffers\Table;
use \Google\FlatBuffers\ByteBuffer;
use \Google\FlatBuffers\FlatbufferBuilder;

class Attacker extends Table
{
    /**
     * @param ByteBuffer $bb
     * @return Attacker
     */
    public static function getRootAsAttacker(ByteBuffer $bb): Attacker
    {
        $obj = new Attacker();
        return $obj->init($bb->followUOffset($bb->getPosition()), $bb);
    }

    public static function AttackerIdentifier(): string
    {
        return "MOVI";
    }

    public static function AttackerBufferHasIdentifier(ByteBuffer $buf): bool
    {
        return self::__has_identifier($buf, self::AttackerIdentifier());
    }

    /**
     * @param NPosT $_i offset
     * @param ByteBuffer $_bb
     * @return Attacker
     **/
    public function init(int $_i, ByteBuffer $_bb): Attacker
    {
        $this->bb_pos = $_i;
        $this->bb = $_bb;
        return $this;
    }

    /**
     * @return IntT
     */
    public function getSwordAttackDamage(): int
    {
        $o = $this->__offset(4);
        return $o !== 0 ? $this->bb->getInt(Constants::asNPos($o + $this->bb_pos)) : 0;
    }

    /**
     * @param FlatbufferBuilder $builder
     */
    public static function startAttacker(FlatbufferBuilder $builder): void
    {
        $builder->StartObject(1);
    }

    /**
     * @param FlatbufferBuilder $builder
     * @param IntT $sword_attack_damage
     * @return WPosT
     */
    public static function createAttacker(FlatbufferBuilder $builder, int $sword_attack_damage): int
    {
        $builder->startObject(1);
        self::addSwordAttackDamage($builder, $sword_attack_damage);
        $o = $builder->endObject();
        return $o;
    }

    /**
     * @param FlatbufferBuilder $builder
     * @param IntT $swordAttackDamage
     */
    public static function addSwordAttackDamage(FlatbufferBuilder $builder, int $swordAttackDamage): void
    {
        $builder->addIntX(0, $swordAttackDamage, 0);
    }

    /**
     * @param FlatbufferBuilder $builder
     * @return WPosT table offset
     */
    public static function endAttacker(FlatbufferBuilder $builder): int
    {
        $o = $builder->endObject();
        return $o;
    }
}
