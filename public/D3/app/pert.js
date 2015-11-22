loadData(
	{
		 name: 'PERT Diagram',
		 nodes: [
			{ id: 'node0', value: { label: 'Start | 0 | 0' } },
			{ id: 'node1', value: { label: '1 | 2 | -1' } },
			{ id: 'node2', value: { label: '2 | 1 | -1' } },
			{ id: 'node3', value: { label: '3 | 2 | -1' } },
			{ id: 'node4', value: { label: '4 | 3 | -1' } },
			{ id: 'node5', value: { label: '5 | 4 | -1' } },
			{ id: 'node6', value: { label: '6 | 5 | -1' } },
			{ id: 'node7', value: { label: '7 | 4 | -1' } },
			{ id: 'node8', value: { label: '8 | 4 | -1' } },
		 ],
		 links:[
			{ u: 'node0', v: 'node1', value: { label: 'code1[2]' } },
			{ u: 'node0', v: 'node2', value: { label: 'code2[1]' } },
			{ u: 'node0', v: 'node3', value: { label: 'code3[2]' } },
			{ u: 'node1', v: 'node4', value: { label: 'code4[1]' } },
			{ u: 'node2', v: 'node5', value: { label: 'code5[3]' } },
			{ u: 'node3', v: 'node6', value: { label: 'code5[3]' } },
			{ u: 'node5', v: 'node7', value: { label: 'code6[1]' } },
			{ u: 'node6', v: 'node8', value: { label: 'code6[1]' } },
		 ]
	}
);