#include <stdio.h>
int main()
{
    int n,dc,a[10],b[10],i=0,j;
    scanf("%d",&n);
    while(n!=0)
    {   i++;
        a[i]=n%10;
        dc=dc+1;
        n=n/10;
    }
    j=dc;
    for(i=0;i<dc;i++)
    {
       b[i]=a[j];
       j--;
       printf("%d ",b[i]);
    }
    return 0;
}
