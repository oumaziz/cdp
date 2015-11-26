loadData(
	{
		 name: 'PERT Diagram',
		 nodes: [
			{ id: 'node0', value: { label: 'Start | 0 | 0' } },
			{ id: 'node1', value: { label: '1 | 5 | -1' } },
			{ id: 'node2', value: { label: '2 | 15 | -1' } },
		 ],
		 links:[
			{ u: 'node0', v: 'node1', value: { label: 'ABCD[5]' } },
			{ u: 'node0', v: 'node2', value: { label: 'SPRINT2[15]' } },
		 ]
	}
);