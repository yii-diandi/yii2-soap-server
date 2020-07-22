<?php
/**
 * @Author: Wang chunsheng  email:2192138785@qq.com
 * @Date:   2020-07-22 09:07:34
 * @Last Modified by:   Wang chunsheng  email:2192138785@qq.com
 * @Last Modified time: 2020-07-22 09:07:34
 */
 

namespace diandi\soapserver;

/**
 * Class Exception
 *
 * @author Alexander Mohorev <dev.mohorev@gmail.com>
 */
class Exception extends \yii\base\Exception
{
    /**
     * @return string the user-friendly name of this exception
     */
    public function getName()
    {
        return 'SOAP Server Exception';
    }
}
