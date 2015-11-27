loadData(
	{
		 name: 'PERT Diagram',
		 nodes: [
			{ id: 'node0', value: { label: 'Start | 0 | 0' } },
			{ id: 'node1', value: { label: '1 | 16 | 0' } },
			{ id: 'node2', value: { label: '2 | 24 | 24' } },
			{ id: 'node3', value: { label: '3 | 18 | 18' } },
			{ id: 'node4', value: { label: '4 | 24 | 24' } },
			{ id: 'node5', value: { label: '5 | 15 | 15' } },
			{ id: 'node6', value: { label: '6 | 14 | 14' } },
		 ],
		 links:[
			{ u: 'node0', v: 'node1', value: { label: 'TABPRJ[16]' } },
			{ u: 'node1', v: 'node2', value: { label: 'qsqsd[8]' } },
			{ u: 'node2', v: 'node3', value: { label: 'qsd[10]' } },
			{ u: 'node1', v: 'node4', value: { label: 'qds[8]' } },
			{ u: 'node4', v: 'node5', value: { label: 'qsdqsd[7]' } },
			{ u: 'node2', v: 'node6', value: { label: 'dqsd[6]' } },
		 ]
	}
);