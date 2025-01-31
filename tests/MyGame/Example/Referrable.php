<?php
// automatically generated by the FlatBuffers compiler, do not modify

declare(strict_types=1);

namespace MyGame\Example;

use \Google\FlatBuffers\Constants;
use \Google\FlatBuffers\Struct;
use \Google\FlatBuffers\Table;
use \Google\FlatBuffers\ByteBuffer;
use \Google\FlatBuffers\FlatbufferBuilder;

class Referrable extends Table
{
    /**
     * @param ByteBuffer $bb
     * @return Referrable
     */
    public static function getRootAsReferrable(ByteBuffer $bb): Referrable
    {
        $obj = new Referrable();
        return $obj->init($bb->followUOffset($bb->getPosition()), $bb);
    }

    public static function ReferrableIdentifier(): string
    {
        return "MONS";
    }

    public static function ReferrableBufferHasIdentifier(ByteBuffer $buf): bool
    {
        return self::__has_identifier($buf, self::ReferrableIdentifier());
    }

    public static function ReferrableExtension(): string
    {
        return "mon";
    }

    /**
     * @param NPosT $_i offset
     * @param ByteBuffer $_bb
     * @return Referrable
     **/
    public function init(int $_i, ByteBuffer $_bb): Referrable
    {
        $this->bb_pos = $_i;
        $this->bb = $_bb;
        return $this;
    }

    /**
     * @return UlongT
     */
    public function getId(): int
    {
        $o = $this->__offset(4);
        return $o !== 0 ? $this->bb->getUlong(Constants::asNPos($o + $this->bb_pos)) : 0;
    }

    /**
     * @param FlatbufferBuilder $builder
     */
    public static function startReferrable(FlatbufferBuilder $builder): void
    {
        $builder->StartObject(1);
    }

    /**
     * @param FlatbufferBuilder $builder
     * @param UlongT $id
     * @return WPosT
     */
    public static function createReferrable(FlatbufferBuilder $builder, int $id): int
    {
        $builder->startObject(1);
        self::addId($builder, $id);
        $o = $builder->endObject();
        return $o;
    }

    /**
     * @param FlatbufferBuilder $builder
     * @param UlongT $id
     */
    public static function addId(FlatbufferBuilder $builder, int $id): void
    {
        $builder->addUlongX(0, $id, 0);
    }

    /**
     * @param FlatbufferBuilder $builder
     * @return WPosT table offset
     */
    public static function endReferrable(FlatbufferBuilder $builder): int
    {
        $o = $builder->endObject();
        return $o;
    }
}
