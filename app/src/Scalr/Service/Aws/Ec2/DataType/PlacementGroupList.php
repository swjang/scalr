<?php
namespace Scalr\Service\Aws\Ec2\DataType;

use Scalr\Service\Aws\Ec2\Ec2ListDataType;

/**
 * PlacementGroupList
 *
 * @author   Vitaliy Demidov   <vitaliy@scalr.com>
 * @since    31.01.2013
 */
class PlacementGroupList extends Ec2ListDataType
{

    /**
     * List of the public properties
     * which is managed by magic getter and setters internally.
     *
     * @var  array
     */
    protected $_properties = array('requestId');

    /**
     * Constructor
     *
     * @param array|PlacementGroupData  $aListData List of PlacementGroupData objects
     */
    public function __construct($aListData = null)
    {
        parent::__construct($aListData, 'groupName', __NAMESPACE__ . '\\PlacementGroupData');
    }

    /**
     * {@inheritdoc}
     * @see Scalr\Service\Aws\DataType.ListDataType::getQueryArray()
     */
    public function getQueryArray($uriParameterName = 'GroupName', $member = true)
    {
        return parent::getQueryArray($uriParameterName, $member);
    }
}